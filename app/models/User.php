<?php


class User extends Eloquent {

	// specify the table name for the users
	protected $table = 'users';

	// specify the primary key by which to search
	protected $primaryKey = 'user_id';

	// won't delete a user from the database. Instead, it will add a deleted at timestamp (they can then reactivate in future)
	// protected $softDelete = true;

	// these values cannot be set using mass assignment
    protected $guarded = array('university_id', 'profile_pic', 'user_id');

    // these values are explicity set for mass assignment
  	protected $fillable = array('forename', 'surname');

	// each user has a one-to-one relation with their authentication details model
	public function authentication() {
		return $this->hasOne('Authentication');
	}

	// each user belongs to one university
	public function university() {
		return $this->belongsTo('University');
	}

}