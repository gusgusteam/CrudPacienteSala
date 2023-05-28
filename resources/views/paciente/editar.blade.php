@extends('layouts.header')

@section('contenido')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title text-center">EDITAR PACIENTE</h3>
        </div>
        <form  action="{{route('paciente.update',$paciente->id)}}" method="POST" novalidate="novalidate">
            @csrf
            <input type="hidden" name="id_paciente" id="id_paciente" value="{{$paciente->id}}">
            <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nombre" >Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="nombre" value="{{$paciente->nombre}}" placeholder="ingrese su nombre" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="apellidos ">Apellidos</label>
                                <input type="text" name="apellidos" class="form-control" id="apellidos" value="{{$paciente->apellidos}}" placeholder="ingrese sus apellidos" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <textarea type="text" name="direccion" class="form-control" id="direccion"  placeholder="ingrese la direccion" >{{$paciente->direccion}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="telefono">telefono</label>
                                <input type="number" name="telefono" class="form-control" id="telefono" value="{{$paciente->telefono}}" placeholder="ingrese el nro: telefono" >                                  
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="nro_carnet">N: carnet</label>
                                <input type="number" name="nro_carnet" class="form-control" id="nro_carnet" value="{{$paciente->nro_carnet}}" placeholder="ingrese su nro: carnet" >
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="sala">sala</label>
                                <select name="id_sala" id="id_sala" class="form-control" >
                                    @foreach ($salas as $sala)
                                        <option @if ($sala->id==$paciente->id_sala) {{'selected'}} @endif value="{{$sala->id}}">{{$sala->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> 
                    </div>                 
            </div>
            <div class="modal-footer justify-content-between">
                <a href="{{route('paciente.index',1)}}" class="btn btn-default" >Regresar</a>
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
   
