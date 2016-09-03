<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Inscription;    

use App\Club;

use App\Player;

use App\Category;

use Laracasts\Flash\Flash;

use Session;

class GlobalController extends Controller
{
    public function playersClub($id)
    {
        $inscription = Inscription::find($id);
        $inscription->delete();
        Flash::info('El Inscription se ha eliminado correctamente');
        return redirect('/admin/inscriptions')->with('success','noticia');
    }
}
