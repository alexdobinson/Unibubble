<?php

class LoginController extends BaseController {
    
	protected $page = array(
		'title' => 'Login to Unibubble',
        'description' => 'Unibubble'
	);

    public function showLogin()
    {
    	return View::make('authentication/login')->with('page', (object)$this->page);
    }

    public function loginUser()
    {
    	$user = array(
    		'email' => Input::get('email'),
    		'password' => Input::get('password')
    	);

		if(Auth::attempt($user)) {
			return Redirect::to('/');
		}

		return Redirect::back()->with('login_errors', true);
    }

}