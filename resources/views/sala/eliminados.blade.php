@extends('layouts.header')

@section('contenido')

<div class="m-2">
    <a href="{{route('sala.index',1)}}" class="btn btn-primary">Regresar</a>
</div>
<div class="card ">
    <div class="card-header">
    <h3 class="card-title text-center">LISTA DE SALAS</h3>
    </div>
    <div class="card-body">
        <table id="example" class="table table-responsive-xl table-bordered table-sm table-hover table-striped">
            <thead>
                <tr>
                    
                    <th width="90%">Nombre</th>
                    <th width="10%">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($salas as $sala)
                    <tr>
                        <td>{{$sala->nombre}}</td>
                        <td class="py-1 align-middle text-center">
                        <div class="btn-group btn-group-sm">
                            <a class="btn btn-dark" rel="tooltip" data-placement="top" title="Restaurar" href="{{route('sala.restore',$sala->id)}}" >Restaurar</i></a>
                        </div>
                        </td>
                    </tr>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
      
@endsection

