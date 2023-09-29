<?php

namespace App\Controllers;

class Agama extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Agama',
            'js' => 'Agama'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/Agama/formAgama', $data)
            . view('pages/footer', $data);
    }
}