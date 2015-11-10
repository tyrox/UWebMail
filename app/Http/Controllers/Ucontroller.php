<?php
namespace App\Http\Controllers;
use View;
use App\User;
use App\Http\Controllers\Controller;


class Ucontroller extends Controller
{
    public function showDash() {
    	return view ('index');
    }

public function index() 
{
	//$usuarios = User::all();
	return View('index');
	//->with('usuarios', $usuarios);
} 

public function get_register()
{		
	return View::make('register');
}
public function post_formulario()
{		
	return View::make('register');
}
}

