<?php

namespace App\Http\Controllers;

use App\Models\Locais;
use Illuminate\Http\Request;

class LocaisColetaController extends Controller
{
    public function index()
    {
        $locais = Locais::where('id', '!=', null)->get();

        return view('locais_coleta', compact('locais'));
    }
}
