@extends('layouts.user_type.auth')

@section('content')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
     <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header pb-0">
                        <div class="d-lg-flex">
                            <div>
                                <h5 class="mb-0">Todas las Categorías</h5>
                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <button type="button" class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        +&nbsp; Nuevo Roll
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable fixed-height fixed-columns">
                                <table id="example" class="table table-flush dataTable-table" style="width:100%">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 20.977%;">
                                            <a href="#" class="dataTable-sorter">#No.</a>
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 20.977%;">
                                            <a href="#" class="dataTable-sorter">Roll</a>
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 20.977%;">
                                            <a href="#" class="dataTable-sorter">Descripción</a>
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 20.977%;">
                                            <a href="#" class="dataTable-sorter">Módulo</a>
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 20.977%;">
                                            <a href="#" class="dataTable-sorter">Estado</a>
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 20.977%;">
                                            <a href="#" class="dataTable-sorter">Acciones</a>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($roll)
                                        @foreach($roll as $data)
                                            <tr>
                                                <td class="text-sm font-weight-normal roll">{{$data->id_roll}}</td>
                                                <td class="text-sm font-weight-normal">{{$data->name}}</td>
                                                <td class="text-sm font-weight-normal">{{$data->description}}</td>
                                                <td class="text-sm font-weight-normal">{{$data->module}}</td>
                                                <td class="text-sm font-weight-normal">{{$data->active}}</td>
                                                <td class="text-sm font-weight-normal">
                                                    <a id="editarRoll" href="#" data-bs-toggle="modal" data-bs-target="#editModal"
                                                       class="mx-3" data-bs-toggle="tooltip"
                                                       data-bs-original-title="Editar">
                                                        <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                    </a>
                                                    <span data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                        style="cursor: pointer;" data-bs-toggle="tooltip" class="delete-roll mx-3" data-bs-original-title="Eliminar">
                                                        <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Roll</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="roles_subroles" method="post" action="/save_data_roll" enctype="multipart/form-data" novalidate>
                        @csrf
                            <label for="categoryName" class="form-label">Nombre del Roll</label>
                            <div class="">
                                <input type="text" class="form-control " value="" id="categoryName" name="categoryName" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        <div>
                            <label class="mt-4">Descripción del Roll</label>
                            <div class="">
                                <textarea type="text" class="form-control  " name="description" id="categoryDescription"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Estao</label>
                                <select name="status" class="form-select" required aria-label="select example">
                                    <option value="">Seleccione un estado</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                                <div class="invalid-feedback">  válida.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Modulos</label>
                                <select id="moduleSelect" name="module" class="form-select" required aria-label="select example">
                                    <option value="">Seleccione Módulo</option>
                                    @isset($modules)
                                        @foreach($modules as $module)
                                            @foreach($module as $value)
                                                @isset($value->name)
                                                    <option value="{{$value->id_module}}">{{$value->name}}</option>
                                                @endisset
                                            @endforeach
                                        @endforeach
                                    @endisset
                                </select>
                                <div class="invalid-feedback">  válida.</div>
                            </div>
                            <div class="col-md-10">
                                <label for="validationCustom03" class="form-label">
                                    <input type="hidden" name="numero_submodules" id="submodules_count" />
                                    <span  id="numero_submodules"></span> Sub Modulos</label>
                                    <div id="containerSubmodules" >

                                    </div>
                            </div>
                        </div>
                        <div class=" justify-content-end mt-4">
                            <button type="button" class="btn btn-secondary mx-4" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" name="button" class="btn bg-gradient-dark js-btn-next">Crear Roll</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal Editar ROLL -->

     <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="editModalLabel">Editar Roll</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <form id="roles_subroles" method="post" action="/save_data_roll" enctype="multipart/form-data" novalidate>
                         @csrf
                         <label for="categoryName" class="form-label">Nombre del Roll</label>
                         <div class="">
                             <input type="text" class="form-control " value="" id="categoryName" name="edit_categoryName" onfocus="focused(this)" onfocusout="defocused(this)">
                         </div>
                         <div>
                             <label class="mt-4">Descripción del Roll</label>
                             <div class="">
                                 <textarea type="text" class="form-control  " name="edit_description" id="categoryDescription"></textarea>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-6">
                                 <label for="validationCustom03" class="form-label">Estao</label>
                                 <select name="edit_status" class="form-select" required aria-label="select example">
                                     <option value="">Seleccione un estado</option>
                                     <option value="1">Activo</option>
                                     <option value="0">Inactivo</option>
                                 </select>
                                 <div class="invalid-feedback">  válida.</div>
                             </div>
                             <div class="col-md-6">
                                 <label for="validationCustom03" class="form-label">Modulos</label>
                                 <select id="moduleSelect" name="edit_module" class="form-select" required aria-label="select example">
                                     <option value="">Seleccione Módulo</option>
                                     @isset($modules)
                                         @foreach($modules as $module)
                                             @foreach($module as $value)
                                                 @isset($value->name)
                                                     <option value="{{$value->id_module}}">{{$value->name}}</option>
                                                 @endisset
                                             @endforeach
                                         @endforeach
                                     @endisset
                                 </select>
                                 <div class="invalid-feedback">  válida.</div>
                             </div>
                             <div class="col-md-10">
                                 <label for="validationCustom03" class="form-label">
                                     <input type="hidden" name="edit_numero_submodules" id="submodules_count" />
                                     <span  id="numero_submodules"></span> Sub Modulos</label>
                                 <div id="containerSubmodules" >

                                 </div>
                             </div>
                         </div>
                         <div class=" justify-content-end mt-4">
                             <button type="button" class="btn btn-secondary mx-4" data-bs-dismiss="modal">Cerrar</button>
                             <button type="submit"  class="btn bg-gradient-dark js-btn-next">Crear Roll</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
     <!-- Modal Borrar ROLL -->
     <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="deleteModalLabel">Eliminar Roll</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     ¿Seguro que desea elimiar este roll?
                  </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary mx-4" data-bs-dismiss="modal">Cancelar</button>
                     <button type="submit" name="button" class="btn bg-gradient-danger js-btn-next" id="acept_delete_roll">Acetar</button>
                 </div>
             </div>
         </div>
     </div>


     <script type="text/javascript" src="../../assets/js/index.js"></script>
     <script>
         var url = protocol + "//" +  hostName;
         let id_roll;

         $("#acept_delete_roll").click(function (){

             $('#deleteModal').modal('hide');
         });

         $(".delete-roll").click(function() {
             var $row = $(this).closest("tr");
             id_roll = $row.find(".roll").text();
             var myHeaders = new Headers();
             myHeaders.append("Content-Type", "application/json");

             var raw = JSON.stringify({
                 "id_roll": id_roll
             });

             var requestOptions = {
                 method: 'POST',
                 headers: myHeaders,
                 body: raw,
                 redirect: 'follow'
             };

             fetch( url+"/delete_roll", requestOptions)
                 .then(response => response.json())
                 .then(result => {
                     console.log(result);
                     //location.reload();
                 })
                 .catch(error => console.log('error', error));
         });

         $("#editarRoll").click(function (){
             var myHeaders = new Headers();
             myHeaders.append("Cookie", "XSRF-TOKEN=eyJpdiI6InFCbFlxSFlFeHZKdjI4MnJhSU9iYnc9PSIsInZhbHVlIjoia3p2cld4WUMvM3FtRUJKVU53VUs3MzdOenZmS3loODAwdWtBMnN2QlpjeXo0aHAyUGdDSUswZ3dMWEZJelp2NzZDZkpIOThkRTNtTjFvZDJuS09JYVJ2VTA2Z3N4eGtSRTFHQS92TC9pbjN6NUVua0ttNHF0aWNmYXd3L2xTL0YiLCJtYWMiOiIyNGY0MDFjZGIzMGE2NmU4M2VlODVmMjBkNjJiYjlhYmY2OGRmYmFjNDBhNmZhZWQ2YjgxZjU1ZmU5ZWU4OTg4IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6ImpaeVQwWVJRL3A5RzQyMmwyeU1MMkE9PSIsInZhbHVlIjoiT0RuR3hmRUIrUWZibjZQRWtjN2JkaEd0eWpuK1N0UXE3MXBYQ21SODhkUXBUWE9ueExlZnFNNUlQbFNWeVVYamdNR01EU1Y4RzFXbUxGV2gzYVF6ODFQd0JnYXJSVTdJdm5QMFoyc25rMGhyWGFzTVQ5Y29WOHBhK2R3eE5TZ2giLCJtYWMiOiJmODU5Yzk1MWEwMTZhMWNiZTg0NTQzNDg1OTYyOTcyMTFiZDQ3NWY5MzQ1N2NiYWZhMjRmZTY2ZTY5NDQ2YjZlIiwidGFnIjoiIn0%3D");

             var requestOptions = {
                 method: 'GET',
                 headers: myHeaders,
                 redirect: 'follow'
             };

             fetch(url+"/get_roll/"+id_roll, requestOptions)
                 .then(response => response.json())
                 .then(result => {
                     console.log(result)
                 })
                 .catch(error => console.log('error', error));
         });

         //$("#acept_delete_roll").click(


     </script>
@endsection

