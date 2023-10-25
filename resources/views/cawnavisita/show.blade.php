@extends('tablar::page')

@section('title', 'View Cawnavisita')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        View
                    </div>
                    <h2 class="page-title">
                        {{ __('Cawnavisita ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('cawnavisitas.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Cawnavisita List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    @if(config('tablar','display_alert'))
                        @include('tablar::common.alert')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Cawnavisita Details</h3>
                        </div>
                        <div class="card-body">
                            
<div class="form-group">
<strong>Tipo Documento:</strong>
{{ $cawnavisita->tipo_documento }}
</div>
<div class="form-group">
<strong>Documento:</strong>
{{ $cawnavisita->documento }}
</div>
<div class="form-group">
<strong>Visitante:</strong>
{{ $cawnavisita->visitante }}
</div>
<div class="form-group">
<strong>Telefono:</strong>
{{ $cawnavisita->telefono }}
</div>
<div class="form-group">
<strong>Institucion Del Visitante:</strong>
{{ $cawnavisita->institucion_del_visitante }}
</div>
<div class="form-group">
<strong>Area Destino:</strong>
{{ $cawnavisita->area_destino }}
</div>
<div class="form-group">
<strong>Persona A Contactar:</strong>
{{ $cawnavisita->persona_a_contactar }}
</div>
<div class="form-group">
<strong>Razon De Visita:</strong>
{{ $cawnavisita->razon_de_visita }}
</div>
<div class="form-group">
<strong>Hora De Ingreso:</strong>
{{ $cawnavisita->hora_de_ingreso }}
</div>
<div class="form-group">
<strong>Hora De Salida:</strong>
{{ $cawnavisita->hora_de_salida }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


