@extends('layouts.app')

@section('content')
<link href="{{ asset('/css/registro.css') }}" rel="stylesheet">
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="container-registro mt-5">

    <form method="post" action="{{route('estudianteUpdate', $estudiante->id)}}">
        @method('PUT')
        @csrf

        <div class="form-group form-registro">
            <label>Matrícula</label>
            <input type="text" class="form-control {{$errors->has('matricula') ? 'error' : ''}}" value="{{$estudiante->matricula}}" name="matricula" id="matricula">

            <!-- Error -->
            @if ($errors->has('matricula'))
            <div class="error">
                {{$errors->first('matricula')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Nombre</label>
            <input type="text" class="form-control {{$errors->has('nombre') ? 'error' : ''}}" value="{{$estudiante->nombre}}" name="nombre" id="nombre">

            <!-- Error -->
            @if ($errors->has('nombre'))
            <div class="error">
                {{$errors->first('nombre')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Apellido Paterno</label>
            <input type="text" class="form-control {{$errors->has('apellidoP') ? 'error' : ''}}" value="{{$estudiante->apellidoP}}" name="apellidoP" id="apellidoP">

            <!-- Error -->
            @if ($errors->has('apellidoP'))
            <div class="error">
                {{$errors->first('apellidoP')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Apellido Materno</label>
            <input type="text" class="form-control {{$errors->has('apellidoM') ? 'error' : ''}}" value="{{$estudiante->apellidoM}}" name="apellidoM" id="apellidoM">

            <!-- Error -->
            @if ($errors->has('apellidoM'))
            <div class="error">
                {{$errors->first('apellidoM')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Fecha Nacimiento</label>
            <input type="date" class="form-control {{$errors->has('fechaNacimiento') ? 'error' : ''}}" value="{{$estudiante->fechaNacimiento}}" name="fechaNacimiento" id="fechaNacimiento">

            <!-- Error -->
            @if ($errors->has('fechaNacimiento'))
            <div class="error">
                {{$errors->first('fechaNacimiento')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Sexo</label>
            <input type="text" class="form-control {{$errors->has('sexo') ? 'error' : ''}}" value="{{$estudiante->sexo}}" name="sexo" id="sexo">

            <!-- Error -->
            @if ($errors->has('sexo'))
            <div class="error">
                {{$errors->first('sexo')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Email</label>
            <input type="email" class="form-control {{$errors->has('email') ? 'error' : ''}}" value="{{$estudiante->email}}" name="email"
                id="correo">

            @if ($errors->has('email'))
            <div class="error">
                {{$errors->first('email')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Celular</label>
            <input type="text" class="form-control {{$errors->has('celular') ? 'error' : ''}}" value="{{$estudiante->celular}}" name="celular"
                id="celular">

            @if ($errors->has('celular'))
            <div class="error">
                {{$errors->first('celular')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Calle</label>
            <input type="text" class="form-control {{$errors->has('calle') ? 'error' : ''}}" value="{{$estudiante->calle}}" name="calle"
                id="calle">

            @if ($errors->has('calle'))
            <div class="error">
                {{$errors->first('calle')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Colonia</label>
            <input type="text" class="form-control {{$errors->has('colonia') ? 'error' : ''}}" value="{{$estudiante->colonia}}" name="colonia" id="colonia">

            <!-- Error -->
            @if ($errors->has('colonia'))
            <div class="error">
                {{$errors->first('colonia')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Codigo Postal</label>
            <input type="text" class="form-control {{$errors->has('codigoPostal') ? 'error' : ''}}" value="{{$estudiante->codigoPostal}}" name="codigoPostal" id="codigoPostal">

            <!-- Error -->
            @if ($errors->has('codigoPostal'))
            <div class="error">
                {{$errors->first('codigoPostal')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Num. Ext</label>
            <input type="text" class="form-control {{$errors->has('numExt') ? 'error' : ''}}" value="{{$estudiante->numExt}}" name="numExt" id="numExt">

            <!-- Error -->
            @if ($errors->has('numExt'))
            <div class="error">
                {{$errors->first('numExt')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Ciudad</label>
            <input type="text" class="form-control {{$errors->has('ciudad') ? 'error' : ''}}" value="{{$estudiante->ciudad}}" name="ciudad" id="ciudad">

            <!-- Error -->
            @if ($errors->has('ciudad'))
            <div class="error">
                {{$errors->first('ciudad')}}
            </div>
            @endif
        </div>

        <div class="div-btn-submit">
            <input type="submit" name="send" value="Submit" class="btn-submit">
        </div>
    </form>
</div>

@endsection
