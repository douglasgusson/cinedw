<?php

namespace App\Http\Controllers;

use App\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    /**
     *
     * @param  int  $id
     * @return View
     */
    public function __invoke($id)
    {
        return view('filme', ['filme' => Filme::findOrFail($id)]);
    }
}
