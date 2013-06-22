<?php

class Job extends Eloquent 
{
	// specify the table name for the users
	protected $table = 'job_listings';

	// specify the primary key by which to search
	protected $primaryKey = 'listing_id';

    protected $guarded = array();

    public static $rules = array();
}