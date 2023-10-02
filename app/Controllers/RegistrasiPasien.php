<?php

namespace App\Controllers;

class RegistrasiPasien extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Registrasi Pasien',
            'js' => 'RegistrasiPasien'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('RegistrasiPasien/formRegistrasiPasien', $data)
            . view('pages/footer', $data);
    }
}