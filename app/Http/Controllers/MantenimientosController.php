<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantenimientosController extends Controller
{
    public function index()
    {
        return view('Generales.index');
    }
}
