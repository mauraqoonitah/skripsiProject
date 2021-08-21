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
            'title' => 'Beranda Responden',

        ];
        return view('responden/berandaResponden', $data);
    }
}
