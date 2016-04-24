<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Player;

class PlayerController extends Controller
{
    public function view($id){
    	$player = Player::find($id);
    	$player->user;
    	dd($player);
    }
}
