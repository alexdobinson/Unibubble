<?php

class Product extends Eloquent 
{
	// specify the table name for the users
	protected $table = 'buysell_listings';

	// specify the primary key by which to search
	protected $primaryKey = 'listing_id';

    protected $guarded = array();

    public static $rules = array();

    public function scopeWanted($query, $wanted = 1)
    {
    	$query->where('wanted', $wanted);
    }

    public function scopeActive($query)
    {
    	$query->where('sold', 0);
    }

	public function category() {
		return $this->hasOne('Category');
	}

	public function user() {
		return $this->hasOne('User');
	}

	// public function condition() {
	// 	return $this->hasOne('Condition');
	// }
}