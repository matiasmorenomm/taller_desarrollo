@extends("layouts.plantilla")

@section("contenido")
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Creacion Periodo</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Nuevo periodo <small>ingrese fechas del nuevo periodo de postulacion</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form class="form-label-left input_mask" action="/periodo" method="post">
                        @csrf
                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Fecha Inicio </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="date" class="form-control has-feedback-left" required value="{{ old('fecha_inicio') }}" name="fecha_inicio" id="fecha_inicio">
                                {{ $errors->first('fecha_inicio') }}
                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Fecha Fin </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="date" class="form-control has-feedback-left" required value="{{ old('fecha_fin') }}" name="fecha_fin" id="fecha_fin">
                                {{ $errors->first('fecha_fin') }}
                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                <small>La fecha de fin debe ser mayor que la fecha de inicio</small>
                            </div>
                        </div>
                        <ul class="nav navbar-right panel_toolbox">
                            <button type="submit" id="boton" class="btn btn-success">Crear</button>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
<script src="js/creacion-periodo.js"></script>
@endsection

