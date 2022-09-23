@extends('layouts.user_type.auth')

@section('content')
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
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><label>Show <select class="dataTable-selector"><option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table class="table table-flush dataTable-table" id="category-list">
                                        <thead class="thead-light">
                                        <tr><th data-sortable="" style="width: 7.78968%;"><a href="#" class="dataTable-sorter">ID</a></th><th data-sortable="" style="width: 13.1451%;"><a href="#" class="dataTable-sorter">NAME</a></th><th data-sortable="" style="width: 40.1168%;"><a href="#" class="dataTable-sorter">DESCRIPTION</a></th><th data-sortable="" style="width: 23.9533%;"><a href="#" class="dataTable-sorter">CREATION DATE</a></th><th data-sortable="" style="width: 14.9951%;"><a href="#" class="dataTable-sorter">ACTION</a></th></tr>
                                        </thead>
                                        <tbody><tr><td class="text-sm">1</td><td class="text-sm">Food</td><td class="text-sm">Find our recipies</td><td class="text-sm">2022-09-11 05:15:06</td><td class="text-sm">
                                                <a href="https://soft-ui-dashboard-pro-laravel.creative-tim.com/laravel-edit-categories/1" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit category">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="https://soft-ui-dashboard-pro-laravel.creative-tim.com/laravel-delete-category/1" data-bs-toggle="tooltip" data-bs-original-title="Delete category">
                                                    <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                </a>
                                            </td></tr><tr><td class="text-sm">2</td><td class="text-sm">Home</td><td class="text-sm">Find the latest trends in interior desgin</td><td class="text-sm">2022-09-11 05:15:06</td><td class="text-sm">
                                                <a href="https://soft-ui-dashboard-pro-laravel.creative-tim.com/laravel-edit-categories/2" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit category">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="https://soft-ui-dashboard-pro-laravel.creative-tim.com/laravel-delete-category/2" data-bs-toggle="tooltip" data-bs-original-title="Delete category">
                                                    <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                </a>
                                            </td></tr><tr><td class="text-sm">3</td><td class="text-sm">Fashion</td><td class="text-sm">Find the latest trends</td><td class="text-sm">2022-09-11 05:15:06</td><td class="text-sm">
                                                <a href="https://soft-ui-dashboard-pro-laravel.creative-tim.com/laravel-edit-categories/3" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit category">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="https://soft-ui-dashboard-pro-laravel.creative-tim.com/laravel-delete-category/3" data-bs-toggle="tooltip" data-bs-original-title="Delete category">
                                                    <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                </a>
                                            </td></tr></tbody>
                                    </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 3 of 3 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"></ul></nav></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>2022, made with <i class="fa fa-heart" aria-hidden="true"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>&amp; <a style="color: #252f40;" href="https://www.updivision.com" class="font-weight-bold ml-1" target="_blank">UPDIVISION</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.updivision.com" class="nav-link text-muted" target="_blank">UPDIVISION</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
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
    <script type="text/javascript" src="../../assets/js/index.js"></script>
@endsection

