<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscriptionPlayer extends Model
{
    protected $table = 'inscription_players';
    protected $fillable = ['id', 'inscription_id', 'player_id'];

    public function Inscriptions()
	{
	    return $this->belongsTo('App\Inscription');
	}

	public function players()
	{
	    return $this->belongsTo('App\Player');
	}
}
