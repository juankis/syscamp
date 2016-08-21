<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table = 'Clubs';
    protected $fillable = ['id', 'id_club', 'name', 'color_official', 'color_anternative', 'fijo', 'movil', 'facebook',
    						'dt_name', 'dt_second_name', 'dt_movil', 'president', 'vice_president', 'general_secretary',
    						'delegate_holder'];


    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
