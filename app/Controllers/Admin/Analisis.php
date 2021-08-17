<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;



class Analisis extends BaseController
{
    protected $mRequest;

    public function __construct()
    {
        $this->mRequest = service("request");
    }
    public function home()
    {
        $data = [
            'title' => 'Kelola Instrumen',

        ];
        return view('admin/analisis-survei/home', $data);
    }
    public function laporan()
    {
        $data = [
            'title' => 'Laporan Survei Kepuasan',

        ];
        return view('admin/analisis-survei/laporan', $data);
    }
    public function laporanInstrumen()
    {
        $data = [
            'title' => 'Laporan Survei Kepuasan',

        ];
        return view('admin/analisis-survei/laporan_instrumen', $data);
    }
    public function laporanKepuasan()
    {
        $data = [
            'title' => 'Laporan Survei Kepuasan',

        ];
        return view('admin/analisis-survei/laporan_kepuasan', $data);
    }
}
