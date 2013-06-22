<?php

class Category extends Eloquent 
{
	// specify the table name for the categories
	protected $table = 'listing_categories';

	// specify the primary key by which to search
	protected $primaryKey = 'category_id';

	// these values cannot be set using mass assignment
    protected $guarded = array('category_id', 'created_at', 'updated_at');

    public static $rules = array();

    public function scopename($query, $category_name)
    {
       	return $query->where('title', $category_name);
    }
}