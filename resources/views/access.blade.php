@extends('layouts.user_type.auth')

@section('content')

    <div class="container-fluid py-4">
        <main class="main-content mt-1 border-radius-lg">
            <div class="container-fluid my-3 py-3 d-flex flex-column">
                <div class="row mb-5 justify-content-center align-items-center">
                    <div class="col-9">

                        <div class="card card-body" id="profile">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-sm-auto col-4">
                                    <div class="avatar avatar-xxl position-relative">
                                        <div>
                                            <label for="file-input" class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                                <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" aria-hidden="true" data-bs-original-title="Edit Image" aria-label="Edit Image"></i>
                                                <span class="sr-only">Edit Image</span>
                                            </label>
                                            <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
<img src="https://thumbs.dreamstime.com/z/imagen-del-placeholder-perfil-silueta-gris-ninguna-foto-123478397.jpg" class="avatar-xxl" id="imgDisplay" alt="Profile Photo">
</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-auto col-8 my-auto">
                                    <div class="h-100">
                                        <h5 class="mb-1 font-weight-bolder">
                                            Alec Thompson
                                        </h5>
                                        <p class="mb-0 font-weight-bold text-sm">
                                            CEO / Co-Founder
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                                    <label class="form-check-label mb-0">
                                        <small id="profileVisibility">
                                            Estado
                                        </small>
                                    </label>
                                    <div class="form-check form-switch ms-2">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23" checked="" onchange="visible()">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-4" id="basic-info">
                            <div class="card-header">
                                <h5>Información General</h5>
                            </div>
                            <div class="card-body pt-0">
                                <form action="/laravel-save-user-profile" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="ETFuvjuKPijRROznGfFaJDOumgWZKqgjnvuagqNU"> <input type="file" id="file-input" name="user_img" accept="image/*" class="d-none">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="form-label">Nombres</label>
                                            <div class="input-group">
                                                <input id="firstName" name="firstName" class="form-control" type="text" placeholder="Nombres" required="required"  onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Apellidos</label>
                                            <div class="input-group">
                                                <input id="lastName" name="lastName" class="form-control" type="text" placeholder="Apellidos"   onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom03" class="form-label">Roll</label>
                                            <select id="rollUser" name="rollUser" class="form-select" required aria-label="select example">
                                                <option value="">Seleccione un Roll</option>
                                                <option value="1">Activo</option>
                                                <option value="0">Inactivo</option>
                                            </select>
                                            <div class="invalid-feedback">  válida.</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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
        </footer> </div>

@endsection

