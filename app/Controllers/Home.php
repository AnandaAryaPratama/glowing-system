<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function dashboard($id,$nama)
	{
		echo "Parameter yang diinput adalah = ".$id;
		return view('home_dashboard');
	}

	//--------------------------------------------------------------------

}
