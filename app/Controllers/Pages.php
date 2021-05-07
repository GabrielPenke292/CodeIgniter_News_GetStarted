<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller{
    public function index(){
        return view("welcome_message");
    }

    public function view($page = 'home'){
        if(! is_file(APPPATH."/views/pages/".$page.".php")){
            // A página requerida não existe
            throw new \CodeIgniter\Exception\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);    // Primeira letra maiúscula

        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer');
    }
}