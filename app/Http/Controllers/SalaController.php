<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{

    public function index($sw)
    {
        $salas=Sala::select(
            'salas.*'
            )
         ->orderBy('salas.created_at','desc')
         ->where('salas.activo','=',$sw)
         ->get();
        if($sw==1){
            return view('sala.index',compact('salas'));
        }else{
            return view('sala.eliminados',compact('salas'));  
        }
    }

    public function create()
    {
        return view('sala.create');
    }


    public function store(Request $request)
    {
        $sala= new Sala();
        $sala->nombre=$request->nombre;
        $sala->save();

        return redirect(route('sala.index',1));
    }


    public function show(Sala $sala)
    {
        //
    }

    public function buscar(Sala $sala)
    {
        return view('sala.editar',compact('sala'));
    
    }


    public function edit(Sala $sala)
    {
        
    }

 
    public function update(Request $request, Sala $sala)
    {
        $sala->nombre=$request->nombre;
        $sala->update();

        return redirect(route('sala.index',1));
    }


    public function destroy(Sala $sala)
    {
        $sala->activo=0;
        $sala->update();
        return redirect(route('sala.index',1));
    }

    public function restore(Sala $sala)
    {
        $sala->activo=1;
        $sala->update();
        return redirect(route('sala.index',0));
    }
}
