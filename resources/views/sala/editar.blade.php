@extends('layouts.header')

@section('contenido')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title text-center">EDITAR SALA</h3>
        </div>
        <form  action="{{route('sala.update',$sala->id)}}" method="POST" novalidate="novalidate">
            @csrf
            <input type="hidden" name="id_sala" id="id_sala" value="{{$sala->id}}">
            <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nombre" >Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="nombre" value="{{$sala->nombre}}" placeholder="ingrese el nombre de la sala" >
                            </div>
                        </div>
                        
                    </div>                
            </div>
            <div class="modal-footer justify-content-between">
                <a href="{{route('sala.index',1)}}" class="btn btn-default" >Regresar</a>
                <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
   
