<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{
    public function index(){

    	$teste = 123;
    	$nome = 'George';
    	$sobrenome = 'Cruz';

    	return view('site.home.index', compact('teste', 'nome', 'sobrenome'));
    }

    public function contato(){


    	return view('site.contato.contato');
  
    }
}
