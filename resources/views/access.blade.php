@extends('layouts.user_type.auth')

@section('content')
    <style>

        .wrapper:active #img-result {
            margin-top: 2px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        }
        .wrapper #img-result {
            cursor: pointer;
            margin: 0;
            position: relative;
            background: #9fa7a5;
            background-size: cover;
            background-position: center;
            display: block;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.3);
            color: rgba(0, 0, 0, 0);
            transition: box-shadow 0.3s, margin 0.3s, background-image 1.5s;
        }
        .wrapper #img-result.no-image:before {
            font-family: 'FontAwesome';
            content: "\f030";
            position: absolute;
            left: 50%;
            top: 50%;
            color: #fff;
            font-size: 48px;
            opacity: 0.8;
            transform: translate(-50%, -50%);
            text-shadow: 0 0px 5px rgba(0, 0, 0, 0.4);
        }
        .wrapper button {
            margin-top: 20px;
            display: block;
            font-family: 'Open Sans Condensed', sans-serif;
            background: #9fa7a5;
            width: 100%;
            border: none;
            color: #fff;
            padding: 10px;
            letter-spacing: 1.3px;
            font-size: 1.05em;
            border-radius: 5px;
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.3);
            outline: 0;
            transition: box-shadow 0.3s, margin-top 0.3s, padding 0.3s;
        }
        .wrapper button:active {
            box-shadow: none;
            margin-top: 24px;
            padding: 8px;
        }
        .show-button {
            background: #264974;
            border: none;
            color: #fff;
            padding: 10px 20px;
            float: right;
            display: none;
        }
        .upload-result {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            overflow-y: auto;
        }
        .upload-result__content {
            word-break: break-all;
            font-family: 'Source Code Pro';
            overflow-wrap: break-word;
        }
    </style>
    <div class="container-fluid  ">
        <main class="main-content mt-1 border-radius-lg">
            <div class="container-fluid d-flex flex-column">
                <div class="row mb-5 justify-content-center align-items-center">
                    <div class="col-9">
                        <div class="card" id="basic-info">
                            <div class="card-body pt-0">
                                <form action="/create-new-user" method="POST" enctype="multipart/form-data" novalidate>
                                    <div class="" id="profile">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-4" style="padding: 10px;">
                                                <div class="wrapper">
                                                    <button type="button" class="no-image" id="img-result">Upload Image</button>
                                                </div>
                                                <div class="upload-result">
                                                    <button class="hide-button">Close</button>
                                                    <pre class="upload-result__content"></pre>
                                                </div>
                                                <input class="form-control form-control-sm" name="foto_usuario" type="file" id="formFile">
                                            </div>

                                            <div class="col-sm-auto col-8 my-auto">
                                                <div class="h-100">
                                                    <input type="hidden" name="userNameInput" id="userNameInput">
                                                    <h5 class="mb-1 font-weight-bolder" id="userName">
                                                        Nuevo Usuario
                                                    </h5>
                                                    <input type="hidden" name="code_staff" value="{{$code}}">
                                                    <p class="mb-0 font-weight-bold text-sm">
                                                        Código: {{$code}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                                                <label class="form-check-label mb-0">
                                                    <small id="profileVisibility">
                                                        Con Acceso al Sistema
                                                    </small>
                                                </label>
                                                <div class="form-check form-switch ms-2">
                                                    <input class="form-check-input" type="checkbox" id="access_system" checked="" onchange="visible()">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="_token" value="ETFuvjuKPijRROznGfFaJDOumgWZKqgjnvuagqNU"> <input type="file" id="file-input" name="user_img" accept="image/*" class="d-none">
                                    @csrf
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
                                                @isset($roll)
                                                    @foreach($roll as $role)
                                                        <option value="{{$role->id_roll}}">{{$role->name}}</option>
                                                    @endforeach
                                                @endisset

                                            </select>
                                            <div class="invalid-feedback">  válida.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Edad</label>
                                            <div class="input-group">
                                                <input id="age" name="age" class="form-control" type="number" placeholder="Edad" value="" onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">Teléfono</label>
                                            <div class="input-group">
                                                <input id="phone" name="phone" class="form-control" type="number" placeholder="4567-8900" value="" onfocus="focused(this)" onfocusout="defocused(this)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="validationCustom03" class="form-label">Tienda</label>
                                            <select id="id_store" name="id_store" class="form-select" required aria-label="select example">
                                                <option value="">Seleccione un tienda</option>
                                                @isset($stores)
                                                    @foreach($stores as $store)
                                                        <option value="{{$store->id_store}}">{{$store->store}}</option>
                                                    @endforeach
                                                @endisset
                                            </select>
                                            <div class="invalid-feedback">  válida.</div>
                                        </div>
                                        <div class="col-md-12 access">
                                            <div class="col-md-12">
                                                <label>Correo</label>
                                                <input type="email" class="form-control"
                                                       placeholder="Email" name="email"
                                                       id="email" aria-label="Email"
                                                       aria-describedby="email-addon" value="">
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <label>Contraseña</label>
                                                    <input class="multisteps-form__input form-control" type="password" name="password" placeholder="******" onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                    <label>Repetir Contraseña</label>
                                                    <input class="multisteps-form__input form-control" type="password" name="repeat_password" placeholder="******" onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
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
    </div>

    <script>
        $('#access_system').on('change', function() {
            if ($(this).is(':checked') ) {
                $(".access").show();
            } else {
                $(".access").hide();

            }
        });

        let nombre;
        let apellido;

        $("#firstName").change(function(){
             nombre =  $(this).val();

        });

        $("#lastName").change(function(){
            apellido =  $(this).val();
            $("#userName").text(nombre.charAt(0)+apellido);
            $("#userNameInput").val(nombre.charAt(0)+apellido);
        });

        var image = document.getElementById('img-result');
        $('input[name=foto_usuario]').change(function() {
            var reader = new FileReader();
            reader.onload = function(evt) {
                image.classList.remove('no-image');
                image.style.backgroundImage = 'url(' + evt.target.result + ')';
                var request = {
                    itemtype: 'test 1',
                    brand: 'test 2',
                    images: [{
                        data: evt.target.result
                    }]
                };

            }
            reader.readAsDataURL($('input[name=foto_usuario]').files[0]);
        });


        (function () {
            var image = document.getElementById('img-result');
            var fileToRead = document.getElementById("formFile");

            fileToRead.addEventListener("change", function(event) {
                var files = fileToRead.files;
                var reader = new FileReader();
                reader.onload = function(evt) {
                    image.classList.remove('no-image');
                    image.style.backgroundImage = 'url(' + evt.target.result + ')';
                }
                console.log(fileToRead.files[0])
                reader.readAsDataURL(fileToRead.files[0]);

            }, false);
        })();

    </script>

@endsection

