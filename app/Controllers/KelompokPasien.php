<?php

namespace App\Controllers;

class KelompokPasien extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Kelompok Pasien',
            'js' => 'KelompokPasien'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/KelompokPasien/formKelompokPasien', $data)
            . view('pages/footer', $data);
    }
}