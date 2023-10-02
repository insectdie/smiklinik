<?php

namespace App\Controllers;

class ICPC extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'ICPC',
            'js' => 'ICPC'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/ICPC/formICPC', $data)
            . view('pages/footer', $data);
    }
}