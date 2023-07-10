<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index()
    {
        $suppliers = [
            0 => ['nome' => 'fornecedor 1', 'status' => 'N', 'cnpj' => '00.000.000/000-00'],
            1 => ['nome' => 'fornecedor 2', 'status' => 'S']
        ];

        return view('app.suppliers.index', compact('suppliers'));
        // return view('app.suppliers.index');
    }
}
