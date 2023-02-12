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
}
