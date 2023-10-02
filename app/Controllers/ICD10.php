<?php

namespace App\Controllers;

class ICD10 extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'ICD 10',
            'js' => 'ICD10'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/ICD10/formICD10', $data)
            . view('pages/footer', $data);
    }
}