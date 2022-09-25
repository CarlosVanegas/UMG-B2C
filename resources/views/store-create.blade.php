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
                                <h5 class="mb-0">Todas las Tiendas</h5>
                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <button type="button" class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        +&nbsp; Nueva Tienda
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
                                            <a href="#" class="dataTable-sorter">Codigo</a>
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 20.977%;">
                                            <a href="#" class="dataTable-sorter">Nombre</a>
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 20.977%;">
                                            <a href="#" class="dataTable-sorter">Departamento</a>
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 20.977%;">
                                            <a href="#" class="dataTable-sorter">Municipio</a>
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 20.977%;">
                                            <a href="#" class="dataTable-sorter">Teléfono</a>
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 20.977%;">
                                            <a href="#" class="dataTable-sorter">Acciones</a>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($stores)
                                        @foreach($stores as $store)
                                            <tr>
                                                <td class="text-sm font-weight-normal roll">{{$store->id_store}}</td>
                                                <td class="text-sm font-weight-normal roll">{{$store->code_store}}</td>
                                                <td class="text-sm font-weight-normal">{{$store->name}}</td>
                                                <td class="text-sm font-weight-normal">{{$store->departament}}</td>
                                                <td class="text-sm font-weight-normal">{{$store->municipio}}</td>
                                                <td class="text-sm font-weight-normal">{{$store->phone}}</td>
                                                <td class="text-sm font-weight-normal">
                                                    <a id="editarRoll" href="#" data-bs-toggle="modal" data-bs-target="#editModal"
                                                       class="editRoll mx-3" data-bs-toggle="tooltip"
                                                       data-bs-original-title="Editar">
                                                        <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                    </a>
                                                    <span id="eliminarRoll" data-bs-toggle="modal" data-bs-target="#deleteModal"
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
                    <h5 class="modal-title" id="exampleModalLabel">Nueva Tenda {{$code}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="roles_subroles" method="post" action="/save_data_store" enctype="multipart/form-data" novalidate>
                        <input type="hidden" value="{{$code}}" name="codeStore">
                        @csrf
                            <label for="categoryName" class="form-label">Nombre del la tienda</label>
                            <div class="">
                                <input type="text" class="form-control " value="" id="nameStore" name="name_store" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        <div>
                            <label class="mt-4">Descripción del Tienda</label>
                            <div class="">
                                <textarea type="text" class="form-control  " name="description" id="storeDescription"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Estado</label>
                                    <select name="status" class="form-select" required aria-label="select example">
                                    <option value="">Seleccione un estado</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                                <div class="invalid-feedback">  válida.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Tipo de tienda</label>
                                <select name="type_store" class="form-select" required aria-label="select example">
                                    <option value="">Seleccione un tipo de tienda</option>
                                    @isset($typeStore)
                                        @foreach($typeStore as $type)
                                            <option value="{{$type->id_type_store}}">{{$type->name}}</option>
                                        @endforeach
                                    @endisset

                                </select>
                                <div class="invalid-feedback">  válida.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Departamentos</label>
                                <input type="hidden" name="name_departament" id="name_departament">
                                <select id="departamentSelect" name="departament" class="form-select" required aria-label="select example">
                                    <option value="">Seleccione Departamento</option>
                                    @isset($departament)
                                        @foreach($departament as $departament)
                                            <option value="{{$departament->id_departament}}">{{$departament->name}}</option>
                                        @endforeach
                                    @endisset
                                </select>
                                <div class="invalid-feedback">  válida.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">
                                    <input type="hidden" name="numero_submodules" id="submodules_count" />
                                    <input type="hidden" name="name_municipio" id="name_municipio">
                                    <span  id="numero_submodules"></span> Monicipios</label>
                                        <select id="muncipios" name="municipio" class="form-select" required="" aria-label="select example">

                                        </select>
                            </div>
                            <label for="categoryName" class="form-label">Dirección</label>
                            <div class="">
                                <input type="text" class="form-control " value="" id="direcction" name="direction_store" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Teléfono</label>
                                <div class="input-group">
                                    <input id="phone" name="phone_staff" class="form-control" type="number" placeholder="4567-8900" value="" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                        </div>
                        <div class=" justify-content-end mt-4">
                            <button type="button" class="btn btn-secondary mx-4" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" name="button" class="btn bg-gradient-dark js-btn-next">Crear Tienda</button>
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
                     <form id="edit_roles_subroles" method="post" action="/edit_data_roll" enctype="multipart/form-data" novalidate>
                         @csrf
                         <input type="hidden" name="edit_id_roll" id="edit_id_roll" />

                         <label for="categoryName" class="form-label">Nombre del Roll</label>
                         <div class="">
                             <input type="text" class="form-control " value="" id="editCategoryName" name="edit_categoryName" onfocus="focused(this)" onfocusout="defocused(this)">
                         </div>
                         <div>
                             <label class="mt-4">Descripción del Roll</label>
                             <div class="">
                                 <textarea type="text" class="form-control  " name="edit_description" id="editCategoryDescription"></textarea>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-6">
                                 <label for="validationCustom03" class="form-label">Estao</label>
                                 <select id="editStatus" name="edit_status" class="form-select" required aria-label="select example">
                                     <option value="">Seleccione un estado</option>
                                     <option value="1">Activo</option>
                                     <option value="0">Inactivo</option>
                                 </select>
                                 <div class="invalid-feedback">  válida.</div>
                             </div>
                             <div class="col-md-6">
                                 <label for="validationCustom03" class="form-label">Modulos</label>
                                 <select id="editModuleSelect" name="edit_module" class="form-select" required aria-label="select example">
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
                                     <input type="hidden" name="edit_numero_submodules" id="edit_submodules_count" />
                                     <span  id="edit_numero_submodules"></span> Sub Modulos</label>
                                 <div id="edit_containerSubmodules" >

                                 </div>
                             </div>
                         </div>
                         <div class=" justify-content-end mt-4">
                             <button type="button" class="btn btn-secondary mx-4" data-bs-dismiss="modal">Cerrar</button>
                             <button type="submit"  class="btn bg-gradient-dark js-btn-next">Guardar Cambios</button>
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

         $(".delete-roll").click(function() {
             var $row = $(this).closest("tr");
             id_roll = $row.find(".roll").text();
             console.log(id_roll);
         });

         $("#acept_delete_roll").click(function (){
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

             $('#deleteModal').modal('hide');
         });



         $(".editRoll").click(function (){
             var $row = $(this).closest("tr");
             id_roll = $row.find(".roll").text();
             console.log(id_roll);

             var myHeaders = new Headers();
             var requestOptions = {
                 method: 'GET',
                 headers: myHeaders,
                 redirect: 'follow'
             };

             fetch(url+"/get_roll/"+id_roll, requestOptions)
                 .then(response => response.json())
                 .then(result => {

                 $("#editCategoryName").val(result[0].roll[0].name);
                 $("#editCategoryDescription").val(result[0].roll[0].description);
                 $("#editStatus").val(result[0].roll[0].active);
                 $("#editModuleSelect").val(result[0].roll[0].id_module);
                 $("#edit_id_roll").val(result[0].roll[0].id_roll);

                     var myHeaders = new Headers();
                     var requestOptions = {
                         method: 'GET',
                         headers: myHeaders,
                         redirect: 'follow'
                     };
                     let count = 0;
                     console.log(url+"/get/submodueles/roll/"+result[0].roll[0].id_roll);
                     fetch(url+"/get/submodueles/roll/"+result[0].roll[0].id_roll, requestOptions)
                         .then(response => response.json())
                         .then(result => {
                             $("#edit_numero_submodules").text(result.length);
                             $("#edit_submodules_count").val(result.length);
                             $( ".d-flex" ).remove();
                             $( ".horizontal" ).remove();
                             result.forEach((values,keys)=>{
                                 count++;

                                 let status = (values.status == "1") ? "checked" : "";
                                 let status_test = (values.status == "1") ? "Activo" : "Inactivo";
                                 console.log(values.status);
                                 $( "#edit_containerSubmodules" ).append( "<div class=\"d-flex\">\n" +
                                     "                                        <img style=\" max-width: 20%; \" class=\"width-48-px\" src=\"https://www.svgrepo.com/show/335327/bullet.svg\" alt=\"logo_spotify\">\n" +
                                     "                                        <div class=\"my-auto ms-3\">\n" +
                                     "                                            <div class=\"h-100\">\n" +
                                     "                                                <h6 class=\"mb-0\">"+values.nombre+"</h6>\n" +
                                     "                                            </div>\n" +
                                     "                                        </div>\n" +
                                     "                                        <p id=\"edit_status_"+ count +"\" class=\"text-sm text-secondary ms-auto me-3 my-auto\">"+status_test+"</p>\n" +
                                     "                                        <input type=\"hidden\" name=\"edit_sub_module_"+ count +"\" value="+values.id_submodule+" > \n" +
                                     "                                        <input type=\"hidden\" name=\"edit_sub_submodule_"+ count +"\" value="+values.id_roll_detail+" > \n" +
                                     "                                        <div class=\"form-check form-switch my-auto\">\n" +
                                     "                                            <input id=\"check_"+ count +"\" name=\"edit_status_"+ count +"\"  class=\"form-check-input\" "+status+"=\"\" type=\"checkbox\"  value=\""+values.status+"\">\n" +
                                     "                                        </div>\n" +
                                     "                                    </div><hr class=\"horizontal dark\">" );
                             })
                             $('input[type=checkbox]').on('change', function() {
                                 let status = '';
                                 let check;
                                 if ($(this).is(':checked') ) {
                                     status = $(this).prop("id").replace('check_','edit_status_');
                                     check = $(this).prop("id");
                                     $("#"+status).text('Activo');
                                     $('#'+check).val('1');
                                     console.log("Checkbox " + check +  " (" + $(this).val() + ") => Activo");
                                 } else {
                                     status = $(this).prop("id").replace('check_','status_');
                                     $("#"+status).text('Inactivo');
                                     check = $(this).prop("id");
                                     $('#'+check).val('0');
                                     console.log("Checkbox " + check +  " (" + $(this).val() + ") => Inactivo");
                                 }
                             });
                         })
                         .catch(error => console.log('error', error));

                 })


                 .catch(error => console.log('error', error));
         });

         //$("#acept_delete_roll").click(


     </script>
@endsection

