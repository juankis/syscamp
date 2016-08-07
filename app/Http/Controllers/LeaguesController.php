<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\League;

use Laracasts\Flash\Flash;

use Session;

class LeaguesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leagues = League::all();
        return View('leagues.index')->with('leagues',$leagues);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return View('leagues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $league = new League($request->all());
        $league->save();
        
        Flash::info('El Campeonto se ha creado correctamente');
        return redirect()->route('admin.leagues.index');
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
        $league = league::find($id);
        return view('leagues.edit')->with('league',$league);
        //dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $league = league::find($id);
        $league->fill($request->all());
        $league->save();
        Flash::info('El Campeonato se ha editado correctamente');
        return redirect('/admin/leagues');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $league = league::find($id);
        $league->delete();
        Flash::info('El Campeonato se ha eliminado correctamente');
        return redirect('/admin/leagues')->with('success','noticia');
    }
}
