<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'forn0',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '11',
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'forn1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '11',
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'forn2',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '11',
                'telefone' => '0000-0000'
            ],
            3 => [
                'nome' => 'forn3',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '11',
                'telefone' => '0000-0000'
            ],
            4 => [
                'nome' => 'forn4',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '11',
                'telefone' => '0000-0000'
            ]
        ];
        return view('site.fornecedor');
    }
}
