@extends('adminlte::page')

@section('title','WinRed - Jugadores')

@section('css')
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
<h1>Jugadores</h1>
@stop


@section('content')


<div class="card">
        

        <div class="card-body">
            <table class="table table borderead" id="tabla-grupo">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Email</th>
                        <th>Usuario</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $dato)
                    <tr>
                        <td>{{ $dato->nombrecompleto }}</td>
                        <td>{{ $dato->email }}</td>
                        <td>{{ $dato->usuario }}</td>
                        <td>
                            <button class="btn btn-primary">Editar</button>                                                        
                            <button class="btn btn-primary">Depositos</button>
                            <button class="btn btn-primary">Retiros</button>
                            

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

<script>
    $('#tabla-grupo').DataTable({
            responsive: true,
            autoWidth: false
        });
</script>
@stop