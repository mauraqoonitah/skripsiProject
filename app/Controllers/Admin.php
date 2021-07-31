<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    protected $adminModel;
    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin'

        ];
        return view('admin/index', $data);
    }
    public function hasilSurveiResponden()
    {
        $data = [
            'title' => 'Tanggapan Responden'

        ];
        return view('admin/hasil-survei/responden', $data);
    }
    public function lihatResponden()
    {
        $data = [
            'title' => 'Lihat Responden'

        ];
        return view('admin/hasil-survei/lihat_responden', $data);
    }
    public function hasilSurveiInstrumen()
    {
        $data = [
            'title' => 'Hasil Survei Per-Instrumen'

        ];
        return view('admin/hasil-survei/instrumen', $data);
    }
    public function lihatInstrumen()
    {
        $data = [
            'title' => 'Hasil Survei Per-Instrumen'

        ];
        return view('admin/hasil-survei/lihat_instrumen', $data);
    }
    public function kelolaKategori()
    {
        // $category = $this->adminModel->findAll();

        $data = [
            'title' => 'Kelola Kategori',
            'category' => $this->adminModel->getCategory()
        ];

        return view('admin/kelola-survei/kategori', $data);
    }
    public function editKategori($slug)
    {
        $data = [
            'title' => 'Detail Kategori',
            'category' => $this->adminModel->getCategory($slug)
        ];
        return view('admin/kelola-survei/edit_kategori', $data);
    }
}
