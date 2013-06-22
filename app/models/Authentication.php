<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;


class Authentication extends Eloquent implements UserInterface, RemindableInterface {

	// specify the table name for the users
	protected $table = 'authentication';

	// specify the primary key by which to search
	protected $primaryKey = 'user_id';

	// these values cannot be set using mass assignment
    protected $guarded = array('activated', 'user_type', 'user_id', 'pcode');

    // these values are explicity set for mass assignment
  	protected $fillable = array('email', 'password');

    public static $rules = array();

    public function user()
    {
    	return $this->belongsTo('User');
    }

    public function getAuthIdentifier()
    {
    	return $this->user_id;
    }

    public function getAuthPassword()
    {
    	return $this->password;
    }

    public function getReminderEmail()
    {
    	return $this->email;
    }
}