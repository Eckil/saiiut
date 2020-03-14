@extends('plantilla')
@section('contenido')
<!-- Reporte de estados -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">Lista de municipios</h6>
    </div>
    <div class="card-body">
        <div class="table">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable table-striped" id="dataTable" width="100%" cellspacing="0"
                            role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="N°: activate to sort column ascending" style="width: 145px;">N°</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Nombre del municipio: activate to sort column ascending"> Nombre del municipio</th>
                                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Estado: activate to sort column ascending"> Estado</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">N°</th>
                                    <th rowspan="1" colspan="1">Nombre del municipio</th>
                                    <th rowspan="1" colspan="1">Municipio</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($municipios as $mun)

                                <tr role="row" class="odd">
                                    <td>{{$mun->id_municipio}}</td>
                                    <td>{{$mun->municipio}}</td>
                                    <td>{{$mun->as}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop