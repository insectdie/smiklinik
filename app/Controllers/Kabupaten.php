<?php

namespace App\Controllers;

class Kabupaten extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Kabupaten',
            'js' => 'Kabupaten'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/Kabupaten/formKabupaten', $data)
            . view('pages/footer', $data);
    }
}