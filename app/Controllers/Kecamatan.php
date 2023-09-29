<?php

namespace App\Controllers;

class Kecamatan extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Kecamatan',
            'js' => 'Kecamatan'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/Kecamatan/formKecamatan', $data)
            . view('pages/footer', $data);
    }
}