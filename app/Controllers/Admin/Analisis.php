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
}
