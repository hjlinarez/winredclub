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



<div class="modal fade" id="editarJugador" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Jugador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>              

            <form method="POST" id="formulario_editar_jugador" name="formulario_editar_jugador">
                 @csrf
                 <input type="hidden" name="idjugador" id="idjugador" >
                <div class="modal-body">

                    <div class="row">
                        <div class="col">
                            <div class="form-group" >
                                <label for="usuario">Nombre Completo</label>
                                <input type="text" class="form-control" id="nombrecompleto" name="nombrecompleto" placeholder="Nombre Completo">
                            </div>


                            <div class="form-group" >
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Intruduzca su Email de Registro">
                            </div>


                            <div class="form-group" >
                                <label for="email">Numero Movil</label>
                                <input type="text" class="form-control" id="movil" name="movil" placeholder="Numero Movil">
                            </div>


                            <div class="form-group" >
                                <label for="email">Wathsapp</label>
                                <input type="text" class="form-control" id="movil_wp" name="movil_wp" placeholder="Numero Wathsapp">
                            </div>                        
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="idmoneda">Moneda a usar</label>
                                <select class="form-control" id="idmoneda" name="idmoneda" disabled="disabled"> 
                                    <option value="">Seleccione la moneda</option>
                                    <option value="DOL">Dolar Americano</option>
                                    <option value="SOL">Soles</option>
                                </select>                    
                            </div>

                            <div class="form-group" >
                                <label for="usuario">Usuario dentro de la Plataforma</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" disabled="disbaled" placeholder="Usuario">
                            </div>

                        </div>
                    </div>

                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary"  onclick="modificar_jugador();">Modificar</button>
                </div>
              </form>





        </div>
    </div>    
</div>



<div class="modal fade" id="modalDepositos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Depositos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>              
            <div class="modal-body">
                <table id="tabla_depositos_jugador" class="table" width="100%">
                    <thead>
                        <tr>
                            <th>Fecha Hora</th>
                            <th>Referencia</th>
                            <th>Monto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>                                            
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
            </div>              
        </div>
    </div>    
</div>



<div class="modal fade" id="modalRetiros" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Retiros</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>              
            <div class="modal-body">
                <table id="tabla_retiros_jugador" class="table" width="100%">
                    <thead>
                        <tr>
                            <th>Fecha Hora</th>                            
                            <th>Monto</th>
                        </tr>
                    </thead>
                    <tbody>                                            
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
            </div>              
        </div>
    </div>    
</div>



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
                    <tr id="idfila_{{ $dato->idjugador }}">
                        <td id="col_nombrecompleto_{{ $dato->idjugador }}">{{ $dato->nombrecompleto }}</td>
                        <td id="col_email_{{ $dato->idjugador }}">{{ $dato->email }}</td>
                        <td id="col_usuario_{{ $dato->idjugador }}">{{ $dato->usuario }}</td>
                        
                        <td id="acciones_jugador_{{ $dato->idjugador }}">
                            
                            @if ($dato->estatus == 'PEN' )  
                                <button type="button" class="btn btn-primary" onclick="editar_jugador({{ $dato->idjugador }} );">Editar</button>                              
                                <button type="button" class="btn btn-success" onclick="registrar_jugador({{ $dato->idjugador }} );">Registrar</button>
                                <button type="button" class="btn btn-danger" onclick="eliminar_jugador({{ $dato->idjugador }} );">Eliminar</button>
                            @else 
                                <button type="button" class="btn btn-primary" onclick="editar_jugador({{ $dato->idjugador }} );">Editar</button>                            
                                <button type="button" class="btn btn-primary" onclick="depositos_jugador({{ $dato->idjugador }} );">Depositos</button>
                                <button type="button" class="btn btn-primary" onclick="retiros_jugador({{ $dato->idjugador }} );">Retiros</button>
                            @endif
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
    <script src="assets/js/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>


<script>
    $('#tabla-grupo').DataTable({
            responsive: true,
            autoWidth: false,
            ordering:  false,
        });

    function depositos_jugador(idjugador)
    {
    
        axios.post('depositosjugador',
                    {
                        idjugador: idjugador
                    })            
            .then(function (resp) {
                
                $('#tabla_depositos_jugador').DataTable({
                    responsive: true,
                    autoWidth: false,
                    destroy: true,
                    data : resp.data,
                    columns: [
                        {data: 'fecha_hora'},
                        {data: 'referencia'},
                        {data: 'monto', render: $.fn.dataTable.render.number( '.', ',', 2 )},
                        {data: 'estatus'}
                    ]                    
                });

                $('#modalDepositos').modal('show');
            })
            .catch(function (error) {     
                swal("Lo siento!", "Error interno.", "error").then((value)=> {});  
                
            });                        
    }



    function retiros_jugador(idjugador)
    {
    
        axios.post('retirosjugador',
                    {
                        idjugador: idjugador
                    })            
            .then(function (resp) {
                
                $('#tabla_retiros_jugador').DataTable({
                    responsive: true,
                    autoWidth: false,
                    destroy: true,
                    data : resp.data,
                    columns: [
                        {data: 'fecha_hora'},                        
                        {data: 'monto', render: $.fn.dataTable.render.number( '.', ',', 2 )}
                       
                    ]
                });
                $('#modalRetiros').modal('show');
            })
            .catch(function (error) {     
                swal("Lo siento!", "Error interno.", "error").then((value)=> {});  
                
            });                        
    }



    function registrar_jugador(idjugador)
    {

            swal({
                    title: "Confirma que el jugador fue registrado?",
                    text: "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            axios.post('registrarjugador',
                                    {
                                        idjugador: idjugador
                                    })            
                            .then(function (resp) {
                                
                                swal("Muy bien!", "Jugador registrado", "success").then((value)=> {

                                    $("#acciones_jugador_"+idjugador).html("<button type='button' class='btn btn-primary' onclick='editar_jugador("+idjugador+");'>Editar</button><button type='button' class='btn btn-primary' onclick='depositos_jugador("+idjugador+");'>Depositos</button><button type='button' class='btn btn-primary' onclick='retiros_jugador("+idjugador+");'>Retiros</button>");
                                    
                                }); 
                            })
                            .catch(function (error) {     
                                swal("Lo siento!", "Error interno.", "error").then((value)=> {});  
                                
                            });     
                        } 
                        });
    }



    function eliminar_jugador(idjugador)
    {

            swal({
                    title: "Confirma eliminar este registro?",
                    text: "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            axios.post('eliminarjugador',
                                    {
                                        idjugador: idjugador
                                    })            
                            .then(function (resp) {
                                $("#idfila_"+idjugador).remove();
                                swal("Muy bien!", "Registro Eliminado", "success").then((value)=> {}); 
                            })
                            .catch(function (error) {     
                                swal("Lo siento!", "Error interno.", "error").then((value)=> {});  
                                
                            });     
                        } 
                        });
    }


    function editar_jugador(idjugador)
    {
        axios.post('datosjugadorid',
                    {
                        idjugador: idjugador
                    })            
            .then(function (resp) {
                
                $("#idjugador").val(idjugador);
                $("#nombrecompleto").val(resp.data[0].nombrecompleto);
                $("#email").val(resp.data[0].email);
                $("#movil").val(resp.data[0].movil);
                $("#movil_wp").val(resp.data[0].movil_wp);
                $("#usuario").val(resp.data[0].usuario);
                $("#idmoneda").val(resp.data[0].idmoneda);
                $("#editarJugador").modal('show');
            })
            .catch(function (error) {     
                swal("Lo siento!", "Error interno.", "error").then((value)=> {});  
                
            });               
    }



    function modificar_jugador()
    {
        let idjugador       = document["formulario_editar_jugador"].idjugador.value; 
        let nombrecompleto  = document["formulario_editar_jugador"].nombrecompleto.value; 
        let email  = document["formulario_editar_jugador"].email.value; 
        let movil  = document["formulario_editar_jugador"].movil.value; 
        let movil_wp  = document["formulario_editar_jugador"].movil_wp.value; 


        

        axios.post('modificarjugador',
                    {
                        idjugador: idjugador,
                        nombrecompleto: nombrecompleto,
                        email: email,
                        movil: movil,
                        movil_wp: movil_wp

                    })            
            .then(function (resp) {

                if (resp.status == 200)
                {
                    $("#col_nombrecompleto_"+idjugador).html(nombrecompleto);
                    $("#col_email_"+idjugador).html(email);
                    
                    $("#editarJugador").modal('hide');
                    swal("Muy Bien!", "Datos modificados.", "success").then((value)=> {});  
                }
                else{
                    swal(resp.data.status, resp.data.msg, "error").then((value)=> {});  
                }
                
                
            })
            .catch(function (error) {     
                swal("Lo siento!", "Error interno.", "error").then((value)=> {});  
                
            });               
    }











</script>
@stop