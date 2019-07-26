<?php

namespace App\Http\Controllers;

use App\Optica;
use Illuminate\Http\Request;
use App\Ciudad;
use App\Regente;
use App\Http\Requests\OpticaStoreRequest;
use App\Http\Requests\OpticaUpdateRequest;
class OpticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $opts = ciudad::with('name')->get();
        $opticas = Optica::where('estado',1)-> paginate();

        return view('opticas.index',compact('opticas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $ciudads = Ciudad::orderBy('name','ASC')->pluck('name','id');

        return view('opticas.create',compact('ciudads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OpticaStoreRequest $request)
    {
        $opticas = Optica::create($request->all());
        return redirect()->route('regentes.create',$opticas->id)
            ->with('info','Optica ah sido guardada con exito');
        // return view('opticas.create');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Optica  $optica
     * @return \Illuminate\Http\Response
     */
    public function show(Optica $optica)
    {
       // dd($optica->id);
       $regente = Regente::where('optica_id',$optica->id)->first();
       
        return view('opticas.show',compact('optica','regente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Optica  $optica
     * @return \Illuminate\Http\Response
     */
    public function edit(Optica $optica)
    {
        //
         //roduct = opticas::find($id);
          $ciudads = Ciudad::orderBy('name','ASC')->pluck('name','id');
    
        return view('opticas.edit', compact('optica','ciudads'));
       // return view('opticas.edit', compact('optica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Optica  $optica
     * @return \Illuminate\Http\Response
     */
    public function update(OpticaUpdateRequest $request, Optica $optica)
    {
        
        dd($optica->id);
        $optica->update($request->all());
        
        return redirect()->route('opticas.index',$optica->id)
            ->with('info','Optica ah sido guardada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Optica  $optica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Optica $optica)
    {
        
         $optica->where('id',$optica->id)
                ->update(['estado'=>'0']);
        return redirect()->route('opticas.index',$optica->id)
            ->with('info','Optica ah sido Eliminada con exito');
    }
}
