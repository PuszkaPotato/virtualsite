<?php

namespace App\Controllers;

class Images extends BaseController
{
    public function view($image)
    {
        
        if(!is_file(ROOTPATH.'public/uploads/'.$image.'.png')) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($image);
        }

        $this->response->setContentType('image/png');

        echo readfile('uploads/'.$image.'.png');
    }
}
