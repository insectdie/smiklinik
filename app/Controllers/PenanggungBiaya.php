<?php

namespace App\Controllers;

class PenanggungBiaya extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Penanggung Biaya',
            'js' => 'PenanggungBiaya'
        ];

        return view('pages/header', $data)
            . view('pages/menu')    
            . view('Master/PenanggungBiaya/formPenanggungBiaya', $data)
            . view('pages/footer', $data);
    }
}