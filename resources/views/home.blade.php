@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">productos</div>

                <div class="panel-body">

<div class="panel panel-primary ">
    <div class="panel-heading">
        <h4 class="panel-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
            Lista de productos
        </h4>

    </div>
    <div class="panel-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">

                        <button type="button" onClick="location.href='{{route('create.productos')}}'" class="btn btn-responsive button-alignment btn-success" style="margin-bottom:7px;" data-toggle="button">Crear producto</button
                    </div>
                </div>

            </div>
        </div>
        <table class="table table-striped table-bordered table-hover" id="usuarios_table">
            <thead>
                 <tr>
                  
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>accion</th>
                  </tr>
            </thead>
            <tbody>

            @foreach($productos as $key => $producto)
                <tr>
                    
                   
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->descripcion}}</td>

                    <td>
                       
                       
                        <a class="btn btn-small btn-info" href="{{ URL::to('producto/' . $producto->id . '/edit') }}">Editar</a>
                         <a class="btn btn-small btn-danger" href="{{ URL::to('producto/' . $producto->id) }}">Eliminar</a>

                        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
