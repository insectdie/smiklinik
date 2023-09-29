<?php

namespace App\Controllers;

class StatusPernikahan extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Status Pernikahan',
            'js' => 'StatusPernikahan'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/StatusPernikahan/formStatusPernikahan', $data)
            . view('pages/footer', $data);
    }
}