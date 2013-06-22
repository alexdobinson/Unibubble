<?php

class University extends Eloquent {

	// specify the table name for the users
	protected $table = 'universities';

	// specify the primary key by which to search
	protected $primaryKey = 'university_id';

    protected $guarded = array();

    public static $rules = array();

    public function users() {
    	return $this->hasMany('User');
    }
}