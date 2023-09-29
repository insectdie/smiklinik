<?php

namespace App\Controllers;

class Provinsi extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Provinsi',
            'js' => 'Provinsi'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/Provinsi/formProvinsi', $data)
            . view('pages/footer', $data);
    }
}