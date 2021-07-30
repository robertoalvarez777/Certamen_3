<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tipo;

class TipoController extends Controller
{
    public function getTipo(){
        $tipo = array();
        $tipo[] = "Kilowatts";
        $tipo[] = "Watts";
        $tipo[] = "Temperatura";

        return $tipo;
    }

}
