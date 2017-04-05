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
            Crear producto
        </h4>

    </div>
    <div class="panel-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        

                <!-- BEGIN FORM-->

                        
    <form class="form-horizontal" action="{{ route('producto.update', $producto->id)}}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                  <label for="usr">Nombre:</label>
                  <input type="text" class="form-control" id="usr" name="nombre" value="{{$producto->nombre}}">
                </div>
                <div class="form-group">
                  <label for="pwd">Descripcion:</label>
                  <input type="text" class="form-control" id="pwd" name="descripcion" value="{{$producto->descripcion}}">
                </div>
                    


                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-4 col-md-8">
                         
                            <button type="submit" class="btn btn-info ">Editar</button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                <!-- END FORM-->
                    </div>
                </div>

            </div>
        </div>



    </div>
</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
