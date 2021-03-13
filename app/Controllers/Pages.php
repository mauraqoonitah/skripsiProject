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
}
