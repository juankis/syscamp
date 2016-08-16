<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscriptions = Inscription::all();
        return View('inscriptions.index')->with('inscriptions',$inscriptions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('inscriptions.templeate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inscription = new Inscription($request->all());
        $inscription->league_id = 1;
        $inscription->save();
        
        Flash::info('El inscription se ha creado correctamente');
        return redirect()->route('admin.inscriptions.index');
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
        $inscription = Inscription::find($id);
        return view('inscriptions.templeate')->with('inscription',$inscription);
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
        $inscription = Inscription::find($id);
        $inscription->fill($request->all());
        $inscription->save();
        Flash::info('El Inscription se ha editado correctamente');
        return redirect('/admin/inscriptions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inscription = Inscription::find($id);
        $inscription->delete();
        Flash::info('El Inscription se ha eliminado correctamente');
        return redirect('/admin/inscriptions')->with('success','noticia');
    }
}
