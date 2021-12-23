<?php

namespace App\Controllers;
use App\Models\KontenModel;
class Pages extends BaseController
{   
    protected $kontenModel;
    public function __construct()
    {
        $this->kontenModel = new KontenModel();
    }

    public function index()
    {   
        $data = ['title' => 'Home',
        'konten' => $this->kontenModel->getKonten()
    ];
        
        return view('pages/home', $data);
      
    }

    public function about()
    {   
        $data = ['title' => 'Contact'];
        
   
        return view('pages/about',$data);
        
    }

    public function contact()
    {
        
        $data = ['title' => 'About You'
        ,'alamat' =>[
            [
        'alamat' => 'jalan jalan', 
        'kota' => 'jakarta',
        'tipe' => 'rumah'], 
        [
        'alamat'=> 'ka;am eawk',    
        'kota' =>'jakarta',
        'tipe' => 'kantor' 
        ]
     ]
    ];
        return view('pages/contact', $data);
    }
}
