<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $sp1, int $sp2) {
            //echo "A soma de $sp1 + $sp2 é: ".($sp1+$sp2);
            //return view('site.teste', ['x'=> $sp1, 'y'=> $sp2]); //array associativo
            //return view('site.teste', compact('p1', 'p2')); //compact, nomes da variaveis sem o '$'
            return view('site.teste')->with('p1', $sp1)->with('p2', $sp2); //with
    }
}
