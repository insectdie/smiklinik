<?php

namespace App\Controllers;

class Poli extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Poli',
            'js' => 'Poli'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/Poli/formPoli', $data)
            . view('pages/footer', $data);
    }
}