<?php

class LogoutController extends BaseController {
    
	protected $page = array(
		'title' => 'Logout to Unibubble'
	);
	
    public function logoutUser()
    {
        Auth::logout();
    	return Redirect::to('/');
    }

}