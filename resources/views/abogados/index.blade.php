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
            <table id="abogados" class="table table-striped" style="width:100%">
            {{--  <table class="table-responsive table table-striped">  --}}
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID TERCERO</th>
                        <th>MAXIMOPROCEOS</th>
                        <th>tarjeta</th>
                        <th>OBSERVACION</th>
                        <th colspan="2"> Opciones</th>
                        <th style="display: none"></th> 
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
                        </td>  
                        <td style="display: none"></td>
  
                        

                    </tr>
                        
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
    
@stop




@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css"> 
@endsection

@section('js')
    
   <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
   <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>    
   <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script> 

   <script>  

    $(document).ready( function () {
        $('#abogados').DataTable(
        { 
            "paging": true,
            "language":
            {
                "decimal":        "",
                "emptyTable":     "No data available in table",
                "info":           "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty":      "Showing 0 to 0 of 0 entries",
                "infoFiltered":   "(filtered from _MAX_ total entries)",
                "infoPostFix":    "",
                "thousands":      ",",
                "lengthMenu":     "Show _MENU_ entries",
                "loadingRecords": "Loading...",
                "processing":     "",
                "search":         "Buscar:",
                "zeroRecords":    "No matching records found",
                "paginate": {
                    "first":      "First",
                    "last":       "Last",
                    "next":       "Next",
                    "previous":   "Previous"
                },
                "aria": {
                    "sortAscending":  ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                }

                
                
                
            }
        }

        );
    } );
    
    </script>

@endsection
