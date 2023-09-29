<?php

namespace App\Controllers;

class Kelurahan extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Kelurahan',
            'js' => 'Kelurahan'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/Kelurahan/formKelurahan', $data)
            . view('pages/footer', $data);
    }
}