<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('alogin');
	}	

	public function academics()
	{
		return view('tacademics');

    }
    public function attendance()
 	{
 		return view('tattendance');

    }
    public function home()
    {	
    	return view('thome');
    }
	public function library()
	{
		return view('tlibrary');
    }
	public function login()
	{
		return view('tlogin');
	}	

	public function others()
	{
		return view('tothers');

    }
    public function profile()
 	{
 		return view('tprofile');

    }
    public function project()
    {	
    	return view('tprojects');
    }
	public function reset()
	{
		return view('treset-password');
    }	
	

	//--------------------------------------------------------------------

}
