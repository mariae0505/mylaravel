@extends('adminlte::page')


@section('title', 'Lista de Abogados')

@section('content_header')
    <h1>Abogados</h1>
@stop

@section('content')

    <div class="card-header">
    <a href="{{route('abogados.create')}}" class="btn btn-info">Nuevo</a>
    </div>

    <div class="card">  
        <div class="card-body">
            <table class="table-responsive table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID TERCERO</th>
                        <th>MAXIMOPROCEOS</th>
                        <th>tarjeta</th>
                        <th>OBSERVACION</th>
                        <th colspan="2"> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($abogados as $abogado)
                    <tr>
                        <td>{{$abogado->id}} </td>
                        <td>{{$abogado->tercero_id}}</td>
                        <td>{{$abogado->tarjeta}}</td>
                        <td>{{$abogado->maximoprocesos}}</td>
                        <td>{{$abogado->observaciones}}</td>
                        <td width="15px"> <a href="{{route('abogados.edit',$abogado)}}" class="btn btn-info btn-small" >Editar</a></td>
                        <td width="15px"> 
                            <form action="{{route('abogados.destroy',$abogado)}}" method="POST">
                                @method('delete')
                                @csrf
                                <input type="submit" value="Borrar" class="btn btn-danger btn-small">
                            </form>
                            
                        

                    </tr>
                        
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
    
@stop




@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
