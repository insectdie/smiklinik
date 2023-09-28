<?php

namespace App\Controllers;

class StatusPekerjaan extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Status Pekerjaan',
            'js' => 'StatusPekerjaan'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/StatusPekerjaan/formStatusPekerjaan', $data)
            . view('pages/footer', $data);
    }
}