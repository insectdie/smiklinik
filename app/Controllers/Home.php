<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // $data = [
        //     'title' => 'Home'
        // ];

        // return view('pages/header', $data)
        //     . view('pages/menu')    
        //     . view('pages/home', $data)
        //     . view('pages/footer', $data);

        return view('welcome_message');
    }
}
