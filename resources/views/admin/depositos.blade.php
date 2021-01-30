@extends('adminlte::page')

@section('title','WinRed - Depositos')

@section('css')
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
<h1>Depositos</h1>
@stop


@section('content')


<div class="card">
        

        <div class="card-body">
            <table class="table table borderead" id="tabla-grupo">
                <thead>
                    <tr>
                        <th>Jugador</th>
                        <th>Fecha Hora</th>
                        <th>Referencia</th>
                        <th>Monto</th>
                        
                        <th>Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $dato)
                    <tr>
                        <td>{{ $dato->nombrecompleto }}</td>
                        <td>{{ $dato->fecha_hora }}</td>
                        <td>{{ $dato->referencia }}</td>
                        <td>{{ $dato->monto }}</td>
                        <td  id="estado_{{ $dato->id }}">
                            @switch($dato->estatus)
                                @case('APR')
                                    <span class="badge badge-success">APROBADO</span>
                                    @break
                                @case('REC')
                                    
                                    <span class="badge badge-danger">RECHAZADO</span>
                                    @break
                                @default
                                    <button type="button" class="btn btn-success" onclick="aprobar_deposito({{ $dato->id }});">Aprobar</button>
                                    <button type="button" class="btn btn-danger" onclick="rechazar_deposito({{ $dato->id }});">Rechazar</button>    
                                    @break
                            @endswitch                           
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



@endsection


@section('js')
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/dataTables.responsive.min.js"></script>
    <script src="js/responsive.bootstrap4.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    $('#tabla-grupo').DataTable({
            responsive: true,
            autoWidth: false,
            ordering:  false,
            
        });


    function aprobar_deposito(id)
    {
        swal({
                title: "Aprobar este deposito?",                
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) 
                    {                    
                        axios.post('aprobardeposito',
                        {
                            id: id
                        })            
                        .then(function (resp) {
                            // handle success
                            if (resp.status == 200)
                            {
                                swal("El proceso fue ejecutado con exito!", {icon: "success",});
                                $("#estado_"+id).html("<span class='badge badge-success'>APROBADO</span>");
                            }
                            else 
                            {
                                swal("No se pudo ejecutar el proceso!");
                            }
                        })
                        .catch(function (error) {     
                            
                            swal("Hubo un error en el proceso", "Presione el Boton Ok!", "error");
                        }); 

                    } 

                });

    }





    function rechazar_deposito(id)
    {
        swal({
                title: "Rechazar este deposito?",                
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) 
                    {                    
                        axios.post('rechazardeposito',
                        {
                            id: id
                        })            
                        .then(function (resp) {
                            // handle success
                            if (resp.status == 200)
                            {
                                swal("El proceso fue ejecutado con exito!", {icon: "success",});
                                $("#estado_"+id).html("<span class='badge badge-danger'>RECHAZADO</span>");
                            }
                            else 
                            {
                                swal("No se pudo ejecutar el proceso!");
                            }
                        })
                        .catch(function (error) {     
                            
                            swal("Hubo un error en el proceso", "Presione el Boton Ok!", "error");
                        }); 

                    } 

                });

    }
</script>
@stop