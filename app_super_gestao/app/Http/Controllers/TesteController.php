<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $sp1, int $sp2) {
            echo "A soma de $sp1 + $sp2 é: ".($sp1+$sp2);
    }
}
