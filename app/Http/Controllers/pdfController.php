<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function pdfProduto(){
        return \PDF::loadView('pdf.sample')
        // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
        ->download('nome-arquivo-pdf-gerado.pdf');
    }
}
