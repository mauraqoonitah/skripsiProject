<?php

namespace App\Controllers\Responden;

use App\Controllers\BaseController;

class Beranda extends BaseController
{
    public function __construct()
    {

        $this->mRequest = service("request");
    }

    public function index()
    {
        $data = [
            'title' => 'Pilih Instrumen',

        ];
        return view('responden/berandaResponden', $data);
    }
    public function isiDataDiri()
    {
        $data = [
            'title' => 'Isi Data Diri',

        ];
        return view('responden/isiDataDiri', $data);
    }
    public function isiSurvei()
    {
        $data = [
            'title' => 'Isi Survei',

        ];
        return view('responden/isiSurvei', $data);
    }
}
