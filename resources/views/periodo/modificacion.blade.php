@extends("layouts.plantilla")

@section("contenido")
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Modificacion Periodo</h3>
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
                    <form class="form-label-left input_mask">
                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Fecha Inicio </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="date" class="form-control has-feedback-left" required id="inputSuccess2" placeholder="Halan Brito Briones">
                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Fecha Fin </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="date" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Halan Brito Briones">
                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <ul class="nav navbar-right panel_toolbox">
                            <button type="submit" class="btn btn-success">Actualizar</button>
                        </ul>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
