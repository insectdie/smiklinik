<?php

namespace App\Controllers;

class CabangKlinik extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Cabang Klinik',
            'js' => 'CabangKlinik'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/CabangKlinik/formCabangKlinik', $data)
            . view('pages/footer', $data);
    }
}