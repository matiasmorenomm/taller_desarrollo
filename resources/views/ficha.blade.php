@extends("layouts.plantilla")

@section("contenido")
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Ficha personal</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Datos Personales
                        <!-- <small>different form elements</small> -->
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
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

                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Direccion </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" disabled class="form-control has-feedback-left" id="inputSuccess2" placeholder="carretera 5 sur kilometro 256 S/N">
                                <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Comuna </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" disabled class="form-control has-feedback-left" id="inputSuccess2" placeholder="Cabrero">
                                <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Region </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" disabled class="form-control has-feedback-left" id="inputSuccess2" placeholder="Bio-Bio">
                                <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Telefono </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" disabled class="form-control has-feedback-left" id="inputSuccess2" placeholder="958563215">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2" style="color: red;">Telefono Emergencia </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" disabled class="form-control has-feedback-left" id="inputSuccess2" placeholder="958563215">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
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
                    <h2>Datos Postulacion </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form class="form-label-left input_mask">
                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Codigo Postulacion </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" disabled class="form-control has-feedback-left" id="inputSuccess2" placeholder="01-2020">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Fecha Postulacion </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" disabled class="form-control has-feedback-left" id="inputSuccess2" placeholder="10/05/2020">
                                <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Estado Postulacion </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" disabled class="form-control has-feedback-left" id="inputSuccess2" placeholder="Inscrito">
                                <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Estudios </label>
                            <div class="col-md-6 col-sm-6  form-group has-feedback">
                                <input type="text" disabled class="form-control has-feedback-left" id="inputSuccess2" placeholder="Enseñanza Media Completa">
                                <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Postulaciones Anteriores </label>
                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title" style="display: table-cell;">Codigo Postulacion </th>
                                            <th class="column-title" style="display: table-cell;">Año Postulacion </th>
                                            <th class="column-title" style="display: table-cell;">Estado </th>
                                            <th class="column-title" style="display: table-cell;">Cargo </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="even pointer">
                                            <td class=" ">P01-2017</td>
                                            <td class=" ">2017</td>
                                            <td class=" ">Seleccionado</td>
                                            <td class=" ">Jefe cuadrilla</td>
                                            </td>
                                        </tr>
                                        <tr class="odd pointer">
                                            <td class=" ">P02-2016</td>
                                            <td class=" ">2016</td>
                                            <td class=" ">Seleccionado</td>
                                            <td class=" ">Jefe cuadrilla</td>
                                            </td>
                                        </tr>
                                        <tr class="even pointer">
                                            <td class=" ">P02-2015</td>
                                            <td class=" ">2015</td>
                                            <td class=" ">Rechazado</td>
                                            <td class=" "></td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-form-label col-sm-2 ">Capacitaciones </label>
                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title" style="display: table-cell;">Codigo Capacitacion </th>
                                            <th class="column-title" style="display: table-cell;">Año Capacitacion </th>
                                            <th class="column-title" style="display: table-cell;">Nombre Capacitacion </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="even pointer">
                                            <td class=" ">CP035</td>
                                            <td class=" ">2017</td>
                                            <td class=" ">Nudos y manejo de cuerdas</td>
                                            </td>
                                        </tr>
                                        <tr class="odd pointer">
                                            <td class=" ">CP068</td>
                                            <td class=" ">2016</td>
                                            <td class=" ">Control de Incendios Estructurales</td>
                                            </td>
                                        </tr>
                                        <tr class="even pointer">
                                            <td class=" ">CP425</td>
                                            <td class=" ">2016</td>
                                            <td class=" ">Control de Incendios en Espacios Confinados</td>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="nav navbar-right panel_toolbox">
                            <button type="submit" class="btn btn-danger">Rechazar</button>
                            <button type="submit" class="btn btn-success">Siguiente Etapa</button>
                        </ul>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
