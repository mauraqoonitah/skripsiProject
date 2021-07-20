<?php

namespace App\Controllers;


class Pages extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Penjaminan Mutu Instrumen Kepuasan Layanan FMIPA UNJ'
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About|Penjaminan Mutu Instrumen Kepuasan Layanan FMIPA UNJ'

        ];
        return view('pages/about', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login | SIMINTU'

        ];
        return view('auth/login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register | SIMINTU'

        ];
        return view('auth/register', $data);
    }
    public function user()
    {
        $data = [
            'title' => 'user | SIMINTU'

        ];
        return view('user/index', $data);
    }

    public function form_k1()
    {
        $data = [
            'title' => 'Form K1 |Penjaminan Mutu Instrumen Kepuasan Layanan FMIPA UNJ'

        ];
        return view('pages/form_K1', $data);
    }
}
