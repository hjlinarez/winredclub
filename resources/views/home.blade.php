@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
         


                       <div class="row">

                        <div class="col">
                            <div class="card">
                                <div class="card-header bg-success">
                                    Jugadores Pendientes
                                </div>
                                <div class="card-body text-center ">
                                    {{ $jugadores}}
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="card-header bg-primary">
                                    Depositos Pendientes
                                </div>
                                <div class="card-body text-center">
                                {{ $depositos}}
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="card-header bg-warning">
                                    Retiros Pendientes
                                </div>
                                <div class="card-body text-center ">
                                {{ $retiros}}
                                </div>
                            </div>
                        </div>


                       </div>


        </div>
    </div>
</div>
@endsection
