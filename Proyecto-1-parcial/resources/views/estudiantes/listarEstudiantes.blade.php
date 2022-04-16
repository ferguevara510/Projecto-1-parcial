@extends('layouts.app')

@section('content')

<link href="{{ asset('/css/consultar.css') }}" rel="stylesheet">
<div class="titulo-lista">
    <div>
        <a href="{{route('estudianteIndex')}}">
            <button class="btn-primary">Registrar Estudiante</button> 
        </a>
    </div>
    <div><h1>Lista de Estudiantes</h1>
    </div>
    <div></div>
    
</div>


<div class="contenedor-tarjetas">
    @foreach ($estudiantes as $estudiante)
        <div class="tarjeta-estudiante">
            <div class="seccion-inferior">
                <div>
                    <strong>Matrícula: </strong>
                    <span>{{$estudiante->matricula}}</span>
                </div>
                <div>
                    <strong>Nombre: </strong>
                    <span>{{$estudiante->nombre}}</span>
                </div>
                <div>
                    <strong>Apellido paterno: </strong>
                    <span>{{$estudiante->apellidoP}}</span>
                </div>
                <div>
                    <strong>Apellido materno: </strong>
                    <span>{{$estudiante->apellidoM}}</span>
                </div>
                <div>
                    <strong>Fecha Nacimiento: </strong>
                    <span>{{$estudiante->fechaNacimiento}}</span>
                </div>
                <div>
                    <strong>Sexo: </strong>
                    <span>{{$estudiante->sexo}}</span>
                </div>
                <div>
                    <strong>Correo: </strong>
                    <span>{{$estudiante->email}}</span>
                </div>
                <div>
                    <strong>Celular: </strong>
                    <span>{{$estudiante->celular}}</span>
                </div>
                <div>
                    <strong>Calle: </strong>
                    <span>{{$estudiante->calle}}</span>
                </div>
                <div>
                    <strong>Colonia: </strong>
                    <span>{{$estudiante->colonia}}</span>
                </div>
                <div>
                    <strong>Código Postal: </strong>
                    <span>{{$estudiante->codigoPostal}}</span>
                </div>
                <div>
                    <strong>Número exterior: </strong>
                    <span>{{$estudiante->numExt}}</span>
                </div>
                <div>
                    <strong>Ciudad: </strong>
                    <span>{{$estudiante->ciudad}}</span>
                </div>
            </div>
        </div>
    @endforeach
</div>


@endsection