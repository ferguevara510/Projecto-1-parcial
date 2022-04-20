@extends('layouts.app')

@section('content')
<link href="{{ asset('/css/consultar.css') }}" rel="stylesheet">
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="line-search">
    <section>
        <form method="get" action="{{ route('estudianteList') }}">
            <input class="line-search-input" type="search" name="busqueda" placeholder="Nombre estudiante">
            <button class="btn-opcion-buscar" type="submit">Buscar</button>
        </form>
    </section>
</div>
<div class="btn-registrar">
    <button type="button" id="registrarCliente" class="btn-opcion"><a class="texto-link" href="{{ route('estudianteRoot') }}">Registrar</a></button>
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
                <div>
                    <div class="btn-tarjetas">
                        <button type="button" id="modificarCliente" class="btn-opcion"><a class="texto-link" href="{{ route('estudianteEdit', $estudiante->id) }}">Modificar</a></button>
                        <div>
                            <form method="post" action="{{ route('estudianteDelete', $estudiante->id) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" id="eliminarCliente" class="btn-opcion btn-opcion-color">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>


@endsection
