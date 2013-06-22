<?php namespace services\validators;

abstract class Validator
{
	protected $attributes;
	protected $errors;

	public function __construct($attributes)
	{
		$this->attributes = $attributes;
	}

	public function getErrors()
	{
		return $this->errors;
	}

	public function passes()
	{
		$validation = \Validator::make($this->attributes, static::$rules);

		if($validation->passes()) return true;

		$this->errors = $validation->messages();

		return false;
	}
}