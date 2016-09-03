<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'Admins';
    protected $fillable = ['id','name', 'email', 'state', 'passwordscheck2'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
