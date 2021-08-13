<?php namespace App\Controllers;

use App\Models\EsportFormModel;
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

		$config['SMTPEncrypt'] 	= env('email.noreply.encrypt');
		$config['SMTPHost'] 	= env('email.noreply.host');
		$config['SMTPPort'] 	= env('email.noreply.port');
		$config['SMTPUser'] 	= env('email.noreply.user');
		$config['SMTPPass'] 	= env('email.noreply.pass');
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
			/*
            $email->setFrom(env('email.noreply.mail'), 'VGE Sites - noreply');
			$email->setReplyTo($this->request->getPost('email'), $this->request->getPost('name'));
			$email->setTo(env('email.contact'));

			$email->setSubject('VGE Sites - ' . lang('Contact.mail.messageTitle') . ' - ' . $this->request->getPost('name'));
			$email->setMessage(view('templates/emails/confirmation', $data));

			$email->send();

			//Send confirmation mail to user
			$email->setFrom(env('email.noreply.mail'), 'VGE Sites - noreply');
			$email->setReplyTo(env('email.contact'), 'VGE Sites - ' . lang('Contact.mail.messageTitle'));
			$email->setTo($this->request->getPost('email'));

			$email->setSubject('VGE Sites - ' . lang('Contact.mail.confirmationTitle'));
			$email->setMessage(view('templates/emails/contact', $data));

			$email->send();
            */

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

			return json_encode(['status'=> 'invalid', 'csrf' => csrf_hash(), 'errors' => $errors]);
		} else {
			$message = 'Nieznany błąd!';

			return json_encode(['status'=> 'failure', 'csrf' => csrf_hash(), 'message' => $message]);
		}
    }
}
