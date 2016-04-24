<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $table = 'PLayers';
    protected $fillable = ['name', 'birthday', 'user_id'];

    public function user()
	{
	    return $this->belongsTo('App\User');
	}
}
