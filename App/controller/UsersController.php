<?php
namespace App\Controller;
use App\Core\App;
class UsersController
{

	public function index()
	{
		$users= App::get('database')->selectall('users'); 

		return view('users', compact('users'));



	}
	public function store()
	{

		//insert the user associated with the request
		
		App::get('database')->insert("users",["name"=>$_POST["name"]
	]);
		return redirect('users');

		//And then redirect back to all users
		//header("location:users");


		




	}





}