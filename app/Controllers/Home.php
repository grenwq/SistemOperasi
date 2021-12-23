<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   

        $data = [
            'title' => 'Daftar Konten',
            
        ];
        return view('welcome_message');
    }
}
