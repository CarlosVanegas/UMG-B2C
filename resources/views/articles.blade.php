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
                                <h5 class="mb-0">Categorias de Productos</h5>
                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <button type="button" class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        +&nbsp; Nueva Categoria de Producto
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
                                            <a href="#" class="dataTable-sorter">Nombre</a>
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" data-sortable="" style="width: 20.977%;">
                                            <a href="#" class="dataTable-sorter">Acciones</a>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($categorys)
                                        @foreach($categorys as $category)
                                            <tr>
                                                <td class="text-sm font-weight-normal category">{{$category->id_category}}</td>
                                                <td class="text-sm font-weight-normal nameCategory">{{$category->name}}</td>
                                                <td class="text-sm font-weight-normal">
                                                    <a id="editarRoll" href="#" data-bs-toggle="modal" data-bs-target="#editModal"
                                                       class="editRoll mx-3" data-bs-toggle="tooltip"
                                                       data-bs-original-title="Editar">
                                                        <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                    </a>
                                                    <span id="eliminarCategoria" data-bs-toggle="modal" data-bs-target="#deleteModal"
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
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable fixed-height fixed-columns">

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
                     <h5 class="modal-title" id="exampleModalLabel">Nueva categoria</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <form id="roles_category" method="post" action="/save_category_product" enctype="multipart/form-data" novalidate>
                         @csrf
                         <label for="categoryName" class="form-label">Categoría</label>
                         <div class="">
                             <input type="text" class="form-control " value="" id="categoryName" name="categoryName" onfocus="focused(this)" onfocusout="defocused(this)">
                         </div>
                         <div class=" justify-content-end mt-4">
                             <button type="button" class="btn btn-secondary mx-4" data-bs-dismiss="modal">Cerrar</button>
                             <button type="submit" name="button" class="btn bg-gradient-dark js-btn-next">Crear</button>
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



     <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="editModalLabel">Editar La Categoría</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <form id="edit_roles_subroles" method="post" action="/edit_data_category" enctype="multipart/form-data" novalidate>
                         @csrf
                         <input type="hidden" name="edit_id_category" id="edit_id_category" />

                         <label for="categoryName" class="form-label">Nombre</label>
                         <div class="">
                             <input type="text" class="form-control " value="" id="editCategoryName" name="edit_categoryName" onfocus="focused(this)" onfocusout="defocused(this)">
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

     <script type="text/javascript" src="../../assets/js/index.js"></script>

     <script>
         var url = protocol + "//" +  hostName;
         let category;
         let nameCategory;

         $(".delete-roll").click(function() {
             var $row = $(this).closest("tr");
             category = $row.find(".category").text();
             console.log(category);
         }) ;

         $(".editRoll").click(function() {
             var $row = $(this).closest("tr");
             category = $row.find(".category").text();
             nameCategory = $row.find(".nameCategory").text();
             $("#editCategoryName").val(nameCategory);
             $("#edit_id_category").val(category);
             console.log(category + " " + nameCategory);
         });


         $("#acept_delete_roll").click(function (){

             var myHeaders = new Headers();
             myHeaders.append("Content-Type", "application/json");

             var raw = JSON.stringify({
                 "id": category
             });

             var requestOptions = {
                 method: 'POST',
                 headers: myHeaders,
                 body: raw,
                 redirect: 'follow'
             };

             fetch(url+"/delete_category", requestOptions)
                 .then(response => response.json())
                 .then(result => {
                     console.log(result)
                     location.reload();
                 })
                 .catch(error => console.log('error', error));

             $('#deleteModal').modal('hide');
         });
     </script>

@endsection

