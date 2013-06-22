<?php

class AuthenticationController extends BaseController {

    // Handle logging user into site
    public function login()
    {
        return "Hello";
    }


    // Handle logging user out of site
    public function logout()
    {
        Auth::logout();

        // TODO: add code set cookie history: time logged out

        return Redirect::to('/');
    }

}