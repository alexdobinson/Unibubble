<?php namespace services\validators;

\Validator::extend('listing_type', function($attribute, $value, $parameters) 
{
	return in_array($value, \Config::get('custom.listing_types'));
});

class ListingsValidator extends Validator
{
	public static $rules = [
        'looking_for' => 'Integer|Max:1|Min:0',
        'global_category' => 'listing_type|Required',
        'category' => 'AlphaDash|Min:1',
        'sub_category' => 'AlphaDash|Min:1',
        'page' => 'Integer|Min:0',
        'per_page' => 'Integer|Min:8|Max:32'
	];	
}