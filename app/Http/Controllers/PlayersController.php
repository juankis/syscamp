<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Player;

use App\Club;

use App\Category;

use Laracasts\Flash\Flash;

use Session;

use App\Http\Requests\PlayerStoreRequest;
use App\Http\Requests\PlayerUpdateRequest;

class PlayersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$players = Player::orderBy('id','ASC')->paginate(2);
        $players = Player::all();
        return View('players.index')->with('players',$players);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clubs = Club::orderBy('name', 'ASC')->lists('name', 'id');
        $categories = Category::orderBy('name', 'ASC')->lists('name', 'id');
        return View('players.templeate')->with('clubs',$clubs)
                                        ->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlayerStoreRequest $request)
    {
        
        $file = $request->file('picture');
        $name = 'picture_player_'.time().'.'.$file->getClientOriginalExtension();
        //CAMBIAR EN LINUX
        $path = "images\players";
        $file->move($path,$name);     
        

        
        $player = new Player($request->all());
        $player->user_id = 1;
        $player->picture = $path. DIRECTORY_SEPARATOR .$name;
        $player->save();
        
        Flash::info('El Juagador se ha creado correctamente');
        return redirect()->route('admin.players.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::find($id);
        $clubs = Club::orderBy('name', 'ASC')->lists('name', 'id');
        $categories = Category::orderBy('name', 'ASC')->lists('name', 'id');
        return view('players.templeate')->with('player',$player)
                                        ->with('clubs',$clubs)
                                        ->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlayerUpdateRequest $request, $id)
    {
        $player = Player::find($id);
        $this->validate($request,[ 'email' => 'unique:players,email,'.$player->id ], ['email.unique' => 'El email ya esta en uso'] );

        $file = $request->file('picture');
        if($file != ''){
            $name = 'picture_player_'.time().'.'.$file->getClientOriginalExtension();
            $path = "images\players";
            $file->move($path,$name);
            $picture = $path. DIRECTORY_SEPARATOR .$name;    
        }else{
            $picture = $player->picture;
        }
        
        $player->fill($request->all());
        $player->picture = $picture;
        $player->save();
        Flash::info('El Juagador se ha editado correctamente');
        //Session::flash('alg','noticia');
        return redirect('/admin/players');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::find($id);
        $player->delete();
        Flash::info('El Juagador se ha eliminado correctamente');
        return redirect('/admin/players')->with('success','noticia');
    }
}
