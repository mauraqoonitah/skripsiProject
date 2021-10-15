<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\ResponseModel;
use App\Models\InstrumenModel;



class Analisis extends BaseController
{
    protected $mRequest;
    protected $adminModel;
    protected $instrumenModel;
    protected $responseModel;



    public function __construct()
    {
        $this->mRequest = service("request");
        $this->adminModel = new AdminModel();
        $this->instrumenModel = new InstrumenModel();
        $this->responseModel = new ResponseModel();
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
            'category' => $this->adminModel->getCategory(),


        ];
        return view('admin/analisis-survei/laporan', $data);
    }
    public function laporanInstrumen($slug)
    {
        $data = [
            'title' => 'Laporan Survei Kepuasan',
            'category' => $this->adminModel->getCategory($slug),
            'getInstrumenBySlug' => $this->instrumenModel->getInstrumenByCtg($slug),
        ];
        return view('admin/analisis-survei/laporan_instrumen', $data);
    }
    public function laporanKepuasan($insID)
    {
        $data = [
            'title' => 'Laporan Survei Kepuasan',
            'instrumen' => $this->instrumenModel->getInstrumen($insID),
            'responsePertanyaan' => $this->responseModel->getResponseButir($insID),
            'responseJawaban' => $this->responseModel->getResponseJawaban($insID),
            'jumlahRespondenIns' => $this->responseModel->getJumlahRespondenIns($insID),




        ];
        return view('admin/analisis-survei/laporan_kepuasan', $data);
    }
}
