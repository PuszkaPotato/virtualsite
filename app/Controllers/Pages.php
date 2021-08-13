<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
        $data['title'] = 'Virtual-Gaming';
        $data['year'] = date('Y');

		echo view('templates/header', $data);
        echo view('pages/home', $data);
        echo view('templates/footer', $data);
	}

    public function view($page = 'home')
    {
        if(!is_file(APPPATH.'Views/pages/'.$page.'.php'))
        {
            //Can't find file
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);

        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);
    }
}
