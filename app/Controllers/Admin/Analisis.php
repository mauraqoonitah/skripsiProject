<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;



class Analisis extends BaseController
{
    protected $mRequest;
    protected $adminModel;


    public function __construct()
    {
        $this->mRequest = service("request");
        $this->adminModel = new AdminModel();
    }
    public function home()
    {
        $data = [
            'title' => 'Kelola Instrumen',
            'category' => $this->adminModel->getCategory(),


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
            'responseIns' => $this->responseModel->getResponseByInstrumen(),
            'responsePertanyaan' => $this->responseModel->getResponseButir($id),
            'responseJawaban' => $this->responseModel->getResponseJawaban($id),
            'responseJawabanLagi' => $this->responseModel->getResponseJawabanLagi($id),
            'jumlahRespondenIns' => $this->responseModel->getJumlahRespondenIns($id),

        ];
        return view('admin/analisis-survei/laporan_kepuasan', $data);
    }
}
