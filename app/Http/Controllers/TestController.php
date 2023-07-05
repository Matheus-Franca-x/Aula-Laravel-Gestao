<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(int $p1, int $p2)
    {
        // echo "soma de $p1 + $p2 é igual a " . $p1 + $p2;
        // return view('site.test', ['p1' => $p1, '' => $p2]); //array associativa

        return view('site.test', compact('p1', 'p2')); //compact()

        // return view('site.test')->with('p1', $p1)->with('p2', $p2); //with()
    }
}
