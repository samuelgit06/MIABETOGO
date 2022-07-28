<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ajout_etablissement extends Controller
{
    public function etablissements()
    {
    return view('ajout_etablissement');
    }
}