<?php

namespace App\Controllers;

class StatusPendidikan extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Status Pendidikan',
            'js' => 'StatusPendidikan'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/StatusPendidikan/formStatusPendidikan', $data)
            . view('pages/footer', $data);
    }
}