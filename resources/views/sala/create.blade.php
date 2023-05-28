@extends('layouts.header')

@section('contenido')


<div class="card">
    <div class="card-header">
        <h3 class="card-title text-center">CREAR SALA</h3>
    </div>
    <form  action="{{route('sala.store')}}" name="crearSala" method="POST" novalidate="novalidate">
        @csrf
        <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nombre" >Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre"  placeholder="ingrese el nombre de la sala" required>
                        </div>
                    </div>
                </div>                
                
        </div>
        <div class="modal-footer justify-content-between">
            <a href="{{route('sala.index',1)}}" class="btn btn-default" >Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
</div>



@endsection

