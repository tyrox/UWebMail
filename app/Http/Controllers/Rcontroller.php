<?php
namespace App\Http\Controllers;
use Illuminate\Auth\Authenticatable;
use View;
use Mail;
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
		//se crea nuevo usuario y se agrega a la base de datos
		$usuario = new User;

		$usuario->Name = Input::get('name');
		$usuario->User = Input::get('user');
		$usuario->email = Input::get('email');
		$usuario->Password = Input::get('password');

		/*$datos= array(
			'name'=> Input::get('name'),
			'email'=> 'tyron.js@gmail.com',
			'subject'=> 'Suscription UWebMail',
			'msj'=> 'Thank you!
					Welcome to our WebMail.',
			);
			*/
		//$usuario->save();
		Mail::send('email.test', ['name'=>'Byron'], function($message){
			$message->from('tyrox@live.com', 'Tyrox');

			$message->to(Input::get('email'))->subject('Suscription');
			//$message->to('tyron.js@gmail.com', 'some guy')->subject('Suscription');
		});
		return View('index');
	}
	
}
}

