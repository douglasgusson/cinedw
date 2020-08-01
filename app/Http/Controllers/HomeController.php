<?php

namespace App\Http\Controllers;

use App\Filme;
use App\Genero;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $filmes = Filme::all();
        $generos = Genero::with('filmes')->get();
        return view('home', ['filmes' => $filmes, 'generos' => $generos]);
    }
}
