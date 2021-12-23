<?php

namespace App\Controllers;

use App\Models\KontenModel;

class Konten extends BaseController
{   
    protected $kontenModel;
    public function __construct()
    {
        $this->kontenModel = new KontenModel();
    }

    public function index()
    {   
      //  $konten = $this->kontenModel->findAll();
       
       
            $data = [
                'title' => 'Daftar Konten',
                'konten' => $this->kontenModel->getKonten()
            ];
    
           // $KontenModel =new \App\Models\KontenModel();
            return view('konten/index', $data);
     
    return view('konten/index', $data);
    }
    public function deskripsi($slug){
       
        $data = [
            'title' => 'Deskripsi',
            'konten' => $this->kontenModel->getKonten($slug)

        ];

        if(empty($data['konten'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul konten '. $slug. ' tidak ditemukan');
        }

        return view('konten/deskripsi', $data);
    }


    public function create(){
            
        
        $data = [
                'title' => 'Form tambah data',
                'validation' => \Config\Services::validation()
            ];
            return view('konten/create', $data);
    }

    public function save()
    {   

        if(!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[konten.judul]',
                'errors' => [
                    'required' => '{field} konten harus diisi',
                    'is_unique' => '{field} tidak boleh sama'
                ]
                ],
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar, 5024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Harus upload gambar',
                    'mime_in' => 'Ini bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();

            
            // return redirect()->to('/konten/create')->withInput()->with('validation', $validation);
             return redirect()->to('/konten/create')->withInput();
        }
        
        //ambil gambar
        $fileGambar = $this->request->getFile('gambar');
        //generate nama gambar random

        $namaGambar =  $fileGambar->getRandomName();
        //pindahin file ke img
        $fileGambar->move('img', $namaGambar);
        

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->kontenModel->save([
            'slug'=> $slug, 
            'judul' => $this->request->getVar('judul'),
            'gambar'=> $namaGambar,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'deskripsi_lanjut' => $this->request->getVar('deskripsi_lanjut')
        ]);
        
        session()->setFlashData('pesan', 'Data berhasil ditambahkan');
        
        return redirect()->to('/konten');
    }

    public function delete($id)
    {   
        //cari gambar berdasarkan id

        $konten = $this->kontenModel->find($id);
        //hapus gambar

        unlink('img/'. $konten['gambar']);

        $this->kontenModel->delete($id);
        session()->setFlashData('pesan', 'Data berhasil dihapus');
        return redirect()->to('/konten');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form ubah data',
            'validation' => \Config\Services::validation(),
            'konten' => $this->kontenModel->getKonten($slug)
        ];
        return view('konten/edit', $data);
    }

    public function update($id)
    {   

        // check judul
        $kontenLama = $this->kontenModel->getKonten($this->request->getVar('slug'));
        if($kontenLama['judul']== $this->request->getVar('judul')){
            $rule_judul = 'required';
        }else {
            $rule_judul = 'required|is_unique[konten.judul]';
        }


        if(!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} konten harus diisi',
                    'is_unique' => '{field} tidak boleh sama'
                ]
            ]
                // ],
                // 'gambar' => [
                //     'rules' => 'uploaded[gambar]|max_size[gambar,5024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                //     'errors' => [
                //         'uploaded' => 'Pilih gambar terlebih dahulu',
                //         'max_size' => 'Ukuran gambar terlalu besar',
                //         'is_image' => 'Harus upload gambar',
                //         'mime_in' => 'Ini bukan gambar'
                //     ]
                // ]
        ])) {
            return redirect()->to('/konten/edit/'.$this->request->getVar('slug'))->withInput();
        }

        $fileGambar =$this->request->getFile('gambar');

        //check gambar tetap atau diganti

        if($fileGambar->getError() == 4){
            $namaGambar = $this->request->getVar('gambarLama');
        }else{
            //nama file rnadom
            $namaGambar = $fileGambar->getRandomName();
            //upload gambar
            $fileGambar->move('img', $namaGambar);
            //hapus file lama
            unlink('img/'. $this->request->getVar('gambarLama'));
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->kontenModel->save([
            'id' => $id,
            'slug'=> $slug, 
            'judul' => $this->request->getVar('judul'),
            'gambar'=> $namaGambar,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'deskripsi_lanjut' => $this->request->getVar('deskripsi_lanjut')
        ]);

        session()->setFlashData('pesan', 'Data berhasil diubah');
        
        return redirect()->to('/konten');
    }
}
