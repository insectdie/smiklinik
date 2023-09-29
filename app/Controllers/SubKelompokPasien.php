<?php

namespace App\Controllers;

class SubKelompokPasien extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Sub Kelompok Pasien',
            'js' => 'SubKelompokPasien'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/SubKelompokPasien/formSubKelompokPasien', $data)
            . view('pages/footer', $data);
    }
}