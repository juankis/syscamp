<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $table = 'Leagues';
    protected $fillable = ['id','name'];

    public function clubs()
    {
        return $this->belongsToMany('App\Club');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
