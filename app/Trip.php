<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
	protected $table = "trips";

	public $timestamps = false;

	protected $fillable = [
		"to",
		"from",
		"time",
		"date",
		"passengers",
		"price"
	];

	public function users()
    {
       return $this->hasMany(User::class, "trips-users","trip_id","user_id");
    }

}
