<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $table = 'PLayers';
    protected $fillable = ['id_kardex','name', 'birthday', 'second_name_p', 'second_name_m', 'place_of_birth',
    						'ci', 'nationality', 'home','email', 'phone', 'movil', 'profession', 'picture',
    						'user_id', 'category_id', 'club_id'];

    public function user()
	{
	    return $this->belongsTo('App\User');
	}

	public function categories()
    {
        return $this->belongsTo('App\Category');
    }

    public function club()
    {
        return $this->belongsTo('App\Club');
    }

}
