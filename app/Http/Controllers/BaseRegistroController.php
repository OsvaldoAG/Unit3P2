<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registros;

class BaseRegistroController extends Controller
{
    public function index()
    {
        $datoReg = Registros::where('codigo', '55854')->get();
        return response()->json($datoReg);
    }
}
