<?php
namespace App\Http\Controllers;
use View;
use Redirect;
use Input;
use Validator;
use App\User;
use App\Http\Controllers\Controller;


class Rcontroller extends Controller
{
    
    public function index() 
{
	//$usuarios = User::all();
	return View::make('register');
} 

public function get_register()
{		
	return View::make('register');
}
public function post_register()
{		
	$inputs = Input::all();

	$reglas = array(
		'name' => 'required|min:5|max:100',
		'user' => 'required|min:5|max:20|unique:Usuario,User',
		'email' => 'required|email|min:6|max:100',
		'password' => 'required|min:5|max:20',
		'rpassword' => 'required|same:password',
		);

	$mensajes = array(
		'required' => '*'
		);

	$validar = Validator::make($inputs, $reglas, $mensajes);
	if ($validar->fails()) {
		# code...
		return Redirect::back()->withErrors($validar);
	}
	else {
		return View('index');
	}
	
}
}

