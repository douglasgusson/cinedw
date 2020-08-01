<?php

namespace App\Http\Controllers;

use App\Filme;
use App\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     *
     * @param  int  $id
     * @return View
     */
    public function __invoke($id)
    {
        return view('genero', [
            'genero' => Genero::findOrFail($id)
        ]);
    }
}
