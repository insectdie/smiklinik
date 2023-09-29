<?php

namespace App\Controllers;

class Asuransi extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Asuransi',
            'js' => 'Asuransi'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/Asuransi/formAsuransi', $data)
            . view('pages/footer', $data);
    }
}