<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SenhaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $redes = array_combine(
            explode(',', env('REDEWIFI')),
            explode(',', env('SENHAWIFI'))
        );

        return view('senha', [
            'redes' => $redes
        ]);
    }
}
