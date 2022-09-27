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
                                <h5 class="mb-0">Lotes</h5>
                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <button type="button" class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        +&nbsp; Crear Nuevo Lote
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable fixed-height fixed-columns">
                                <div class="col-12">
                                    <div class="card mb-4">
                                        <div class="card-header pb-0">
                                            <h6>Listado de Lotes</h6>
                                        </div>
                                        <div class="card-body px-0 pt-0 pb-2">
                                            <div class="table-responsive p-0">
                                                <table class="table align-items-center mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Value</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ads Spent</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Refunds</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-3 py-1">
                                                                <div>
                                                                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/blue-shoe.jpg" class="avatar me-3" alt="image">
                                                                </div>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">Nike v22 Running</h6>
                                                                    <p class="text-sm font-weight-bold text-secondary mb-0"><span class="text-success">8.232</span> orders</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="text-sm font-weight-bold mb-0">$130.992</p>
                                                        </td>
                                                        <td class="align-middle text-center text-sm">
                                                            <p class="text-sm font-weight-bold mb-0">$9.500</p>
                                                        </td>
                                                        <td class="align-middle text-end">
                                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                                <p class="text-sm font-weight-bold mb-0">13</p>
                                                                <i class="ni ni-bold-down text-sm ms-1 mt-1 text-success"></i>
                                                                <button type="button" class="btn btn-sm btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Refund rate is lower with 97% than other products">
                                                                    <i class="fas fa-info" aria-hidden="true"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-3 py-1">
                                                                <div>
                                                                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-mug.jpg" class="avatar me-3" alt="image">
                                                                </div>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">Business Kit (Mug + Notebook)</h6>
                                                                    <p class="text-sm font-weight-bold text-secondary mb-0"><span class="text-success">12.821</span> orders</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="text-sm font-weight-bold mb-0">$80.250</p>
                                                        </td>
                                                        <td class="align-middle text-center text-sm">
                                                            <p class="text-sm font-weight-bold mb-0">$4.200</p>
                                                        </td>
                                                        <td class="align-middle text-end">
                                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                                <p class="text-sm font-weight-bold mb-0">40</p>
                                                                <i class="ni ni-bold-down text-sm ms-1 mt-1 text-success"></i>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-3 py-1">
                                                                <div>
                                                                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-chair.jpg" class="avatar me-3" alt="image">
                                                                </div>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">Black Chair</h6>
                                                                    <p class="text-sm font-weight-bold text-secondary mb-0"><span class="text-success">2.421</span> orders</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="text-sm font-weight-bold mb-0">$40.600</p>
                                                        </td>
                                                        <td class="align-middle text-center text-sm">
                                                            <p class="text-sm font-weight-bold mb-0">$9.430</p>
                                                        </td>
                                                        <td class="align-middle text-end">
                                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                                <p class="text-sm font-weight-bold mb-0">54</p>
                                                                <i class="ni ni-bold-up text-sm ms-1 mt-1 text-danger"></i>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-3 py-1">
                                                                <div>
                                                                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/bang-sound.jpg" class="avatar me-3" alt="image">
                                                                </div>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">Wireless Charger</h6>
                                                                    <p class="text-sm font-weight-bold text-secondary mb-0"><span class="text-success">5.921</span> orders</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="text-sm font-weight-bold mb-0">$91.300</p>
                                                        </td>
                                                        <td class="align-middle text-center text-sm">
                                                            <p class="text-sm font-weight-bold mb-0">$7.364</p>
                                                        </td>
                                                        <td class="align-middle text-end">
                                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                                <p class="text-sm font-weight-bold mb-0">5</p>
                                                                <i class="ni ni-bold-down text-sm ms-1 mt-1 text-success"></i>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-3 py-1">
                                                                <div>
                                                                    <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/photo-tools.jpg" class="avatar me-3" alt="image">
                                                                </div>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">Mountain Trip Kit (Camera + Backpack)</h6>
                                                                    <p class="text-sm font-weight-bold text-secondary mb-0"><span class="text-success">921</span> orders</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="text-sm font-weight-bold mb-0">$140.925</p>
                                                        </td>
                                                        <td class="align-middle text-center text-sm">
                                                            <p class="text-sm font-weight-bold mb-0">$20.531</p>
                                                        </td>
                                                        <td class="align-middle text-end">
                                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                                <p class="text-sm font-weight-bold mb-0">121</p>
                                                                <i class="ni ni-bold-up text-sm ms-1 mt-1 text-danger"></i>
                                                                <button type="button" class="btn btn-sm btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Refund rate is higher with 70% than other products">
                                                                    <i class="fas fa-info" aria-hidden="true"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                     <h5 class="modal-title" id="exampleModalLabel">Nuevo Lote <span style="color: brown;">{{$code}}</span></h5>
                     <span style="font-size: 12px;">{{$today}}</span>
                 </div>
                 <div class="modal-body">
                     <form id="create_lotes" method="post" action="/save_data_roll" enctype="multipart/form-data" novalidate>
                         @csrf
                         <label for="categoryName" class="form-label">Nombre del Lote</label>
                         <div class="">
                             <input type="text" class="form-control " value="" id="nameLote" name="nameLote" onfocus="focused(this)" onfocusout="defocused(this)">
                         </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Estado</label>
                                <select name="statusLote" class="form-select" required aria-label="select example">
                                    <option value="">Seleccione un estado</option>
                                    <option value="0">En Espera</option>
                                    <option value="1">Aprobado</option>
                                    <option value="2">Cancelado</option>
                                </select>
                                <div class="invalid-feedback">  válida.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Proveedor</label>
                                <select name="supplierLote" class="form-select" required aria-label="select example">
                                    <option value="">Seleccione Proveedor</option>
                                    @isset($proveedores)
                                        @foreach($proveedores as $proveedor)
                                            <option value="{{$proveedor->id_proveedor}}">{{$proveedor->name}}</option>
                                        @endforeach
                                    @endisset
                                </select>
                                <div class="invalid-feedback">  válida.</div>
                            </div>
                        </div>
                         <div>
                             <label class="mt-4">Codigo de Barras <span style="font-weight: 200;font-size: 9px;">(12 Dígitos)</span></label>
                             <div class="">
                                 <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        type = "number"
                                        maxlength = "12"  class="form-control " value="" id="barcode" name="nbarcodeLote" onfocus="focused(this)" onfocusout="defocused(this)">
                             </div>
                             <div class="container" id="app">

                                 <div class="cards">
                                     <div v-for="(item, key) in skus" class="card" style="width: 94%;text-align: center;margin-top: 5px;" :key="key">
                                         <div id="info">
                                             <h6 id="msjError" style="color: red; display: none">Error: Ingresar numero de 12 dígitos</h6>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                         </div>

                         <div class="row">
                             <div class="col-md-2">
                                 <label for="validationCustom03" class="form-label">Produto</label>
                             </div>
                             <div class="col-md-3">
                                 <div class="form-check">
                                     <input class="form-check-input radio" type="radio" name="flexRadioDefault"   value="1">
                                     <label class="form-check-label" for="flexRadioDefault1">
                                         Nuevo
                                     </label>
                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <div class="form-check">
                                     <input class="form-check-input radio" type="radio" name="flexRadioDefault"   value="0" checked>
                                     <label class="form-check-label" for="flexRadioDefault2">
                                         Exitente
                                     </label>
                                 </div>
                             </div>
                             <div id="productoExistente" class="row">
                                 <div class="col-md-6">
                                     <label for="categoryName" class="form-label">Categoria</label>
                                     <select id="CategorySelect" name="category_product" class="form-select" required aria-label="select example">
                                         <option value="">Seleccione categoria</option>
                                         @isset($tcategorys)
                                             @foreach($tcategorys as $tcategory)
                                                 <option value="{{$tcategory->id_category}}">{{$tcategory->name}}</option>
                                             @endforeach
                                         @endisset
                                     </select>
                                 </div>
                                 <div class="col-md-6">
                                     <label for="categoryName" class="form-label">Cantidad</label>
                                     <div class="">
                                         <input type="number" class="form-control " value="" id="countLote" name="countLote" onfocus="focused(this)" onfocusout="defocused(this)">
                                     </div>
                                 </div>
                                 <br>
                                <div>
                                    <label for="categoryName" class="form-label">Producto</label>
                                    <select id="moduleSelect" name="module" class="form-select" required aria-label="select example">
                                        <option value="">Seleccione Producto</option>
                                        @isset($products)
                                            @foreach($products as $product)
                                                <option value="{{$products->id_product}}">{{$products->name}}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                             </div>
                             <div id="newProduct" class="row d-none">
                                 <div>
                                     <label for="categoryName" class="form-label">Bodega</label>
                                     <select id="moduleSelect" name="module" class="form-select" required aria-label="select example">
                                         <option value="">Seleccione Bodega</option>
                                         @isset($bodegas)
                                             @foreach($bodegas as $bodega)
                                                 <option value="{{$bodega->id_celler}}">{{$bodega->name}}</option>
                                             @endforeach
                                         @endisset
                                     </select>
                                 </div>
                                 <div class="col-md-6">
                                     <label for="categoryName" class="form-label">Categoria</label>
                                     <select id="moduleSelect" name="module" class="form-select" required aria-label="select example">
                                         <option value="">Seleccione categoria</option>
                                         @isset($tcategorys)
                                             @foreach($tcategorys as $tcategory)
                                                 <option value="{{$tcategory->id_category}}">{{$tcategory->name}}</option>
                                             @endforeach
                                         @endisset
                                     </select>
                                 </div>
                                 <div class="col-md-6">
                                     <label for="categoryName" class="form-label">Cantidad</label>
                                     <div class="">
                                         <input type="number" class="form-control " value="" id="countLote" name="countLote" onfocus="focused(this)" onfocusout="defocused(this)">
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <label for="categoryName" class="form-label">Nombre Prodcto</label>
                                     <div class="">
                                         <input type="text" class="form-control " value="" id="nameProduct" name="nameProduct" onfocus="focused(this)" onfocusout="defocused(this)">
                                     </div>
                                 </div>
                                <div class="col-md-6">
                                    <label for="categoryName" class="form-label">Código</label>
                                    <div class="">
                                        <input type="text" class="form-control " value="" id="codeProduct" name="codeProduct" onfocus="focused(this)" onfocusout="defocused(this)">
                                    </div>
                                </div>
                             </div>
                             <div class="col-md-12">
                                 <label for="categoryName" class="form-label">Fecha de expiración</label>
                                 <input id="fechaExiracion" type="date" class="form-control " name="expiration_date" data-date="" data-date-format="DD MMMM YYYY" >
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
     <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.8.0/dist/JsBarcode.all.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.4/dist/JsBarcode.all.min.js"></script>

     <script>

         $("#barcode").change(function(){
             let numberBarcode =  $(this).val();
             $("#code_bar").remove();
             if(numberBarcode.length == 12){
                 let divDOM = document.getElementById("info");
                 let svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
                 svg.setAttribute('jsbarcode-format', 'ean13')
                 svg.id = "code_bar"
                 svg.setAttribute('jsbarcode-value', numberBarcode)
                 svg.className.baseVal = "barcode";
                 divDOM.appendChild(svg);

                 console.log(document.querySelector('.barcode'));
                 JsBarcode(".barcode").init();
                 $("#msjError").css("display", "none");
             }else{
                 $("#msjError").css("display", "block");
             }
         });
         $('#create_lotes .radio').on('change', function() {
              let type = $('input[name=flexRadioDefault]:checked', '#create_lotes').val();
              if(type == 1){
                  $("#newProduct").removeClass('d-none');
                  $("#productoExistente").addClass('d-none');

              }else {
                  $("#newProduct").addClass('d-none');
                  $("#productoExistente").removeClass('d-none');

              }
         });

         function makeid(length) {
             var result           = '';
             var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
             var charactersLength = characters.length;
             for ( var i = 0; i < length; i++ ) {
                 result += characters.charAt(Math.floor(Math.random() *
                     charactersLength));
             }
             return result;
         }

         $("#nameProduct").change(function(){
             $( "#codeProduct" ).val(makeid(12)) ;
         });

         $( "#codeProduct" ).prop( "disabled", true );



         var today = new Date();

         var day = today.getDate();

         var month = today.getMonth() + 1;
         var year = today.getFullYear();

         console.log(`${day}/${month}/${year}`);
         $("#fechaExiracion").val(`${year}/${month}/${day}`);
     </script>

@endsection

