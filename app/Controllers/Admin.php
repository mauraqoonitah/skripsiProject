<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin'

        ];
        return view('admin/index', $data);
    }
    public function hasilSurveiResponden()
    {

        return view('admin/hasil-survei/responden');
    }
    public function lihatResponden()
    {

        return view('admin/hasil-survei/lihat_responden');
    }
    public function hasilSurveiInstrumen()
    {

        return view('admin/hasil-survei/instrumen');
    }
    public function lihatInstrumen()
    {

        return view('admin/hasil-survei/lihat_instrumen');
    }
    public function kelolaKategori()
    {

        return view('admin/kelola-survei/kategori');
    }
}
