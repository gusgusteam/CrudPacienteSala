@extends('layouts.header')

@section('contenido')

<div class="m-2">
    <a href="{{route('paciente.index',1)}}" class="btn btn-primary">Regresar</a>
</div>
<div class="card ">
    <div class="card-header">
    <h3 class="card-title text-center">LISTA DE PACIENTES</h3>
    </div>
    <div class="card-body">
        <table id="example" class="table table-responsive-xl table-bordered table-sm table-hover table-striped">
            <thead>
                <tr>
                    
                    <th width="15%">Nombre</th>
                    <th width="20%">Apellidos</th>
                    <th width="20%">Direccion</th>
                    <th width="10%">Telefono</th>
                    <th width="10%">Nro carnet</th> 
                    <th width="15%">sala</th>
                    <th width="10%">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                    <tr>
                        <td>{{$paciente->nombre}}</td>
                        <td>{{$paciente->apellidos}}</td>
                        <td>{{$paciente->direccion}}</td>
                        <td>{{$paciente->telefono}}</td>
                        <td>{{$paciente->nro_carnet}}</td>
                        <td>{{$paciente->nombre_sala}}</td>
                        <td class="py-1 align-middle text-center">
                        <div class="btn-group btn-group-sm">
                            <a class="btn btn-dark" rel="tooltip" data-placement="top" title="Restaurar" href="{{route('paciente.restore',$paciente->id)}}" >Restaurar</i></a>
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

