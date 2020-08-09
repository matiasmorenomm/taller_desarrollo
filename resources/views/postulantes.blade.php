@extends("layouts.plantilla")

@section("contenido")
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Postulantes Periodo actual</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabla postulantes <small>Custom design</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p>Aqui podra selecionar los postulantes que pasan a la proxima etapa</p>
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title" style="display: table-cell;">Codigo Postulacion </th>
                                    <th class="column-title" style="display: table-cell;">Fecha Postulacion </th>
                                    <th class="column-title" style="display: table-cell;">Nombres </th>
                                    <th class="column-title" style="display: table-cell;">Apellido Paterno </th>
                                    <th class="column-title" style="display: table-cell;">Apellido Matero </th>
                                    <th class="column-title" style="display: table-cell;">Rut </th>
                                    <th class="column-title no-link last" style="display: table-cell;"><span class="nobr">Ficha
                                            Personal</span>
                                    </th>
                                    <th class="column-title" style="display: table-cell;">Estado </th>


                                    <th class="bulk-actions" colspan="7" style="display: none;">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">1 Records Selected</span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($postulantes as $postulante)

                                <!--  -->
                                <tr class="even pointer">

                                    <td class=" ">{{ $postulante->id_postulacion }}</td>
                                    <td class=" ">12/07/2020 15:56:02</td>
                                    <td class=" ">Halan</td>
                                    <td class=" ">Brito</td>
                                    <td class=" ">Briones</td>
                                    <td class="a-right a-right ">{{ $postulante->rut }}</td>
                                    <td class=" last"><a href="fichaPersonal.html">Ver</a>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="container float-right">
                            <button style="border-radius: 0px;" class="btn btn-success">Aceptar</button>
                            <button style="border-radius: 0px;" class="btn btn-danger">Cancelar</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
