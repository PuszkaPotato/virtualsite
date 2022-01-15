<?php namespace App\Controllers;

use App\Models\EsportFormModel;
use App\Models\TournamentModel;
use CodeIgniter\Controller;

class Forms extends BaseController
{
    public function view($form)
    {
        if(!is_file(APPPATH.'Views/forms/'.$form.'.php'))
        {
            //Can't find file
            throw new \CodeIgniter\Exceptions\PageNotFoundException($form);
        }

        $data['title'] = ucfirst($form);

        echo view('templates/header', $data);
        echo view('forms/'.$form, $data);
        echo view('templates/footer', $data);
    }

    public function send()
    {
        $model = new EsportFormModel();
		$validation =  \Config\Services::validation();
		$email = \Config\Services::email();

		$config['SMTPCrypto'] 	= env('email.encrypt');
		$config['protocol']     = env('email.protocol');
		$config['SMTPHost'] 	= env('email.host');
		$config['SMTPPort'] 	= env('email.port');
		$config['SMTPUser'] 	= env('email.user');
		$config['SMTPPass'] 	= env('email.pass');
		$config['mailType']		= 'html';

		$email->initialize($config);



		if ($this->request->getMethod() === 'post' && $this->validate('esportErrors'))
		{

			//Save data to database
			$model->save([
				'leader_name' => $this->request->getPost('leaderName'),
				'leader_email' => $this->request->getPost('leaderEmail'),
				'leader_uid' => $this->request->getPost('leaderUID'),
				'team_name' => $this->request->getPost('teamName'),
				'team_tag' => $this->request->getPost('teamTag'),
				// 'team_logo' => $this->request->getPost('teamLogo'),
				'team_facebook' => $this->request->getPost('teamFacebook'),
				'team_website' => $this->request->getPost('teamWebsite'),
			]);

			$data = [
				'leader_name' => $this->request->getPost('leaderName'),
				'leader_email' => $this->request->getPost('leaderEmail'),
				'leader_uid' => $this->request->getPost('leaderUID'),
				'team_name' => $this->request->getPost('teamName'),
				'team_tag' => $this->request->getPost('teamTag'),
				// 'team_logo' => $this->request->getPost('teamLogo'),
				'team_facebook' => $this->request->getPost('teamFacebook'),
				'team_website' => $this->request->getPost('teamWebsite'), 
				'privacy_policy' => $this->request->getPost('privacyPolicy'),
			];


			//Send mail to us
			
            $email->setFrom(env('email.sender'), 'VGE Sites - noreply');
			$email->setReplyTo($this->request->getPost('leaderEmail'), $this->request->getPost('leaderName'));
			$email->setTo(env('email.contact'));

			$email->setSubject('VGE Sites - ' . 'Partnerstwo' . ' - ' . $this->request->getPost('teamName') . ' - ' . $this->request->getPost('leaderName'));
			$email->setMessage(view('templates/emails/partner_request', $data));

			$email->send(false);

			$email->printDebugger();

			//Send confirmation mail to user
			/*$email->setFrom(env('email.sender'), 'VGE Sites - noreply');
			$email->setReplyTo(env('email.contact'), 'VGE Sites - ' . lang('Contact.mail.messageTitle'));
			$email->setTo($this->request->getPost('email'));

			$email->setSubject('VGE Sites - ' . lang('Partnerstwo'));
			$email->setMessage(view('templates/emails/contact', $data));

			$email->send();*/
			
			if ($this->request->isAJAX())
			{

				$data = service('request')->getPost('data');

				$message = 'Aplikacja wysłana pomyślnie!';

				return json_encode(['status' => 'success', 'csrf' => csrf_hash(), 'message' => $message]);

			}

		} else if($validation->hasError('leaderName')
				|| $validation->hasError('leaderEmail')
				|| $validation->hasError('leaderUid')
				|| $validation->hasError('teamName')
				|| $validation->hasError('teamTag')
				//|| $validation->hasError('teamLogo')
				|| $validation->hasError('teamFacebook')
				|| $validation->hasError('teamWebsite')) {

			$errors = $validation->getErrors();

			$privacypolicy = $this->request->getPost('privacyPolicy');

			return json_encode(['status'=> 'invalid', 'csrf' => csrf_hash(), 'errors' => $errors]);
		} else {
			$message = 'Nieznany błąd!';

			return json_encode(['status'=> 'failure', 'csrf' => csrf_hash(), 'message' => $message]);
		}
    }

	public function tournament()
	{
		$model = new TournamentModel();
		$validation = \Config\Services::validation();

		if ($this->request->getMethod() === 'post' && $this->validate('tournamentErrors'))
		{
			//Save POST data to an array
			$data = $this->request->getPost();

			//Check number of players and make sure profiles match number of players
			$listOfPlayers = [
				'players' => json_decode($this->request->getPost('teamPlayers')),
				'steam' => json_decode($this->request->getPost('teamPlayersSteam')),
				'faceit' => json_decode($this->request->getPost('teamPlayersFaceit'))
			];

			if(count($listOfPlayers['players']) > 6 || count($listOfPlayers['players']) != count($listOfPlayers['steam']) 
				&& count($listOfPlayers['players']) != count($listOfPlayers['steam']))
			{
				$errors = $validation->getErrors();

				$errors['teamPlayers'] = 'Ilość graczy i profili sie nie zgadzają! Maksymalna ilość graczy to 6!';
				$errors['teamPlayersSteam'] = 'Ilość graczy i profili sie nie zgadzają! Maksymalna ilość graczy to 6!';
				$errors['teamPlayersFaceit'] = 'Ilość graczy i profili sie nie zgadzają! Maksymalna ilość graczy to 6!';

				$message = $data['teamPlayers'];
				//Send errors
				return json_encode(['status' => 'invalid', 'csrf' => csrf_hash(), 'message' => $message, 'errors' => $errors]);
			}

			$img = $this->request->getFile('teamLogo');

			//Save file with team name as file name
			if($img->isValid() && !$img->hasMoved())
			{
				$newName = $this->request->getPost('teamName');
				$newName = str_replace('-', '', $newName);
				$newName = str_replace(' ', '', $newName);
				$imgName = strtolower($newName);

				$img->move(ROOTPATH . 'public/uploads/teams', $imgName . '.png');
			}

			$data['teamLogo'] = $imgName . '.png';

			//Create array with player information for JSON Object
			$playerArr = [];

			for($i = 0; $i < count($listOfPlayers['players']); $i++)
			{
				$playerArr[$listOfPlayers['steam'][$i]] = $listOfPlayers['players'][$i];
			}

			$playerArr[$data['teamCoachSteam']] = $data['teamCoach'];

			//Create team JSON object for use in get5 sourcemod plugin
			$teamArr = array(
				'name' => $data['teamName'],
				'flag' => 'pl',
				'logo' => $imgName,
				'players' => array(
					$playerArr
				)
			);

			$data['teamJSON'] = json_encode($teamArr);

			//Save data to database
			$model->insert($data);

			if($this->request->isAjax())
			{
				$message = "Zgłoszenie zostało pomyślnie wysłane! Będziemy dalej kontaktować się poprzez Facebook!";

				return json_encode(['status' => 'success', 'csrf' => csrf_hash(), 'message' => $message]);
			}
		} else if($validation->getErrors())
		{

			$errors = $validation->getErrors();

			$message = "Wykryto błędy w formularzu, musisz je poprawić, aby kontynuować!";
			//Send errors
			return json_encode(['status' => 'invalid', 'csrf' => csrf_hash(), 'message' => $message, 'errors' => $errors]);
		} else {
			
			$message = "Wystąpił nieznany błąd! Skontaktuj się z organizatorem turnieju!";

			return json_encode(['status' => 'failure', 'csrf' => csrf_hash(), 'message' => $message]);
		}
	}
}
