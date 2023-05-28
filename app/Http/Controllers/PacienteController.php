<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Sala;
use Illuminate\Http\Request;



class PacienteController extends Controller
{

    public function index($sw)
    {

        $pacientes=Paciente::select(
            'pacientes.*',
            'salas.nombre as nombre_sala'
            )
         ->join('salas','salas.id','=','pacientes.id_sala')
         ->orderBy('pacientes.created_at','desc')
         ->where('pacientes.activo','=',$sw)
         ->get();
        if($sw==1){
            return view('paciente.index',compact('pacientes'));
        }else{
            return view('paciente.eliminados',compact('pacientes'));  
        }
        
    }

    public function create()
    {
        $salas= Sala::all()->where('activo','=',1);
        return view('paciente.create',compact('salas'));
    }

    public function store(Request $request)
    {
        $paciente= new Paciente();
        $paciente->nombre=$request->nombre;
        $paciente->apellidos=$request->apellidos;
        $paciente->telefono=$request->telefono;
        $paciente->direccion=$request->direccion;
        $paciente->nro_carnet=$request->nro_carnet;
        $paciente->id_sala=$request->id_sala;
        $paciente->save();

        return redirect(route('paciente.index',1));
    }

    public function show(Paciente $paciente)
    {
        //
    }

    public function buscar(Paciente $paciente)
    {
        $salas= Sala::all()->where('activo','=',1);
        return view('paciente.editar',compact('paciente','salas'));
    
    }


    public function update(Request $request, Paciente $paciente)
    {
        $paciente->nombre=$request->nombre;
        $paciente->apellidos=$request->apellidos;
        $paciente->telefono=$request->telefono;
        $paciente->direccion=$request->direccion;
        $paciente->nro_carnet=$request->nro_carnet;
        $paciente->id_sala=$request->id_sala;
        $paciente->update();

        return redirect(route('paciente.index',1));
    }


    public function destroy(Paciente $paciente)
    {
        $paciente->activo=0;
        $paciente->update();
        return redirect(route('paciente.index',1));
    }
    public function restore(Paciente $paciente)
    {
        $paciente->activo=1;
        $paciente->update();
        return redirect(route('paciente.index',0));
    }
}
