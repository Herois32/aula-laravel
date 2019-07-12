<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
 
	public function __construct(){
		//Aqui só que pode entra no metodos quem esta logado
	/*	$this->middleware('auth')
			->except([
				'index',
				'categoria'
			]);*/

	//Aqui é pra fazer que o usuário que não esteja logado possa entra nom metodo		
	/*	$this->middleware('auth')
			->except([
				'index',
				'categoria'
			]);
	} */

    public function index(){

    	return view('site.home.teste');
    }

    public function contato(){
    	return 'Contato controller';
    }

    public function categoria($id = 1){

    	return "Categoria o ID: {$id}";
    }


}
