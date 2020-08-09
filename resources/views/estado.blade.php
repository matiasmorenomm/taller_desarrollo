@extends("layouts.plantilla")

@section("contenido")
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Estado de Postulación</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Postulante </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form class="form-label-left input_mask">
                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Nombres </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" disabled class="form-control has-feedback-left" id="inputSuccess2" placeholder="Halan Brito Briones">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Rut </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" disabled class="form-control has-feedback-left" id="inputSuccess2" placeholder="19.536.547-K">
                                <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Fecha de nacimiento </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" disabled class="form-control has-feedback-left" id="inputSuccess2" placeholder="10/05/1998">
                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Sexo </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" disabled class="form-control has-feedback-left" id="inputSuccess2" placeholder="Masculino">
                                <span class="fa fa-male form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Estado </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <div class="alert alert-danger" role="alert">
                        <h4>Su postulación ha sido rechazada debido a que no cumple con requisitos de escolaridad minima.
                        </h4>
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <h4>Su postulación ha sido rechazada debido a que no cumple con requisitos de edad minima.</h4>
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <h4>Su postulación esta en espera debido a que no ha entregado el certificado de salud otorgado por
                            la AChS.</h4>
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <h4>Su postulación esta en espera debido a que no ha entregado el certificado de acreditación de
                            capacitaciones otorgado por el CFT asignado.</h4>
                    </div>
                    <div class="alert alert-success" role="alert">
                        <h4>Su postulación ha sido exitosa, dirigase a la oficina de CeF más cercana para iniciar su
                            enrolamiento.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
