<?php

namespace App\Controllers;

class StatusKeluarga extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Status Keluarga',
            'js' => 'StatusKeluarga'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/StatusKeluarga/formStatusKeluarga', $data)
            . view('pages/footer', $data);
    }
}