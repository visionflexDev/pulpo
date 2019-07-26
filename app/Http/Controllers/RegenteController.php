<?php

namespace App\Http\Controllers;

use App\Regente;
use Illuminate\Http\Request;
use App\Optica;

use App\Ciudad;

class RegenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $regentes = Regente::where('estado',1)-> paginate();

        return view('regentes.index',compact('regentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function createSolo()
    {
        $ciudads = Ciudad::orderBy('name','ASC')->pluck('name','id');
        $optic = Optica::orderBy('nombreOptica','ASC')->pluck('nombreOptica','id');
        return view('regentes.createSolo',compact('ciudads','optic'));
    }
    public function create($id)
    {
        //no puedo pasar aqui el id y que me busque
        //laesty pasando desde optica.create
        //
        //dd($id);
    // aqui esta el id puedes hacer una consulta o lo que quieras hacer
    // 
        $opticas=Optica::Where('id',$id)->first();
        session('opticas',$opticas);
        $ciudads = Ciudad::orderBy('name','ASC')->pluck('name','id');
        //dd(session('id',$ciudads));
        return view('regentes.create',compact("opticas","ciudads"));

        // necesitaba poner un select cuando ingrese un regente por create directo, y no tenga asignado la optica
        // //no  te entiendo 
        // esa te puede ayudar tu solo le das la lista de opticas y el te filtrara.
        // ok entonces trabajare en las rutas y eso mas y cualquier duda mañana te molesto 
        // ok
        // gracias
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $optica=session('opticas');
        //aqui recuperas el id o lo que quieras
        // $optica->id;
        //
        //
        $regentes = Regente::create($request->all());
        return redirect()->route('opticas.index')
            ->with('info','El regente ah sido guardada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Regente  $regente
     * @return \Illuminate\Http\Response
     */
    public function show(Regente $regente, request $id)
    {
        
        $ciudads = Ciudad::orderBy('name','ASC')->pluck('name','id');
         // dd(session('id',$ciudads));
        return view('regentes.show',compact('regente','ciudads'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Regente  $regente
     * @return \Illuminate\Http\Response
     */
    public function edit(Regente $regente,Optica $optica)
    {
        //
         $ciudads = Ciudad::orderBy('name','ASC')->pluck('name','id');
         $opticas = Optica::orderby('nombreOptica','ASC')->pluck('nombreOptica','id');
        // dd($opticas);
        return view('regentes.edit', compact('regente','ciudads','opticas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regente  $regente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regente $regente)
    {
        //
        
        $regente->update($request->all());

        return redirect()->route('regentes.edit',$regente->id)
            ->with('info','Datos del Profesional ah sido guardada con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regente  $regente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regente $regente)
    {
        //
         $regente->where('id',$regente->id)
                ->update(['estado'=>'0']);
        return redirect()->route('regentes.index',$regente->id)
            ->with('info','El profesional ah sido Eliminada con exito');
    }
}
