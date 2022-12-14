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
                                <h5 class="mb-0">Todos los porductos</h5>
                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <a href="./new-product.html" class="btn bg-gradient-primary btn-sm mb-0" target="_blank">+&nbsp; New Product</a>

                                    <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog mt-lg-10">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ModalLabel">Import CSV</h5>
                                                    <i class="fas fa-upload ms-3" aria-hidden="true"></i>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>You can browse your computer for a file.</p>
                                                    <input type="text" placeholder="Browse file..." class="form-control mb-3" onfocus="focused(this)" onfocusout="defocused(this)">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="importCheck" checked="">
                                                        <label class="custom-control-label" for="importCheck">I accept the terms and conditions</label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn bg-gradient-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn bg-gradient-primary btn-sm">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns"><div class="dataTable-top"><div class="dataTable-dropdown"><label>Show <select class="dataTable-selector"><option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries</label></div><div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div></div><div class="dataTable-container"><table class="table table-flush dataTable-table" id="products-list">
                                        <thead class="thead-light">
                                        <tr><th data-sortable="" style="width: 66.087%;"><a href="#" class="dataTable-sorter">Product</a></th><th data-sortable="" style="width: 25.8696%;"><a href="#" class="dataTable-sorter">Category</a></th><th data-sortable="" style="width: 20%;"><a href="#" class="dataTable-sorter">Price</a></th><th data-sortable="" style="width: 26.087%;"><a href="#" class="dataTable-sorter">SKU</a></th><th data-sortable="" style="width: 21.5217%;"><a href="#" class="dataTable-sorter">Quantity</a></th><th data-sortable="" style="width: 30.2174%;"><a href="#" class="dataTable-sorter">Status</a></th><th data-sortable="" style="width: 28.4783%;"><a href="#" class="dataTable-sorter">Action</a></th></tr>
                                        </thead>
                                        <tbody><tr><td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox" id="customCheck1" checked="">
                                                    </div>
                                                    <img class="w-10 ms-3" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/adidas-hoodie.jpg" alt="hoodie">
                                                    <h6 class="ms-3 my-auto">BKLGO Full Zip Hoodie</h6>
                                                </div>
                                            </td><td class="text-sm">Clothing</td><td class="text-sm">$1,321</td><td class="text-sm">243598234</td><td class="text-sm">0</td><td>
                                                <span class="badge badge-danger badge-sm">Out of Stock</span>
                                            </td><td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                </a>
                                            </td></tr><tr><td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox" id="customCheck2" checked="">
                                                    </div>
                                                    <img class="w-10 ms-3" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/macbook-pro.jpg" alt="mac">
                                                    <h6 class="ms-3 my-auto">MacBook Pro</h6>
                                                </div>
                                            </td><td class="text-sm">Electronics</td><td class="text-sm">$1,869</td><td class="text-sm">877712</td><td class="text-sm">0</td><td>
                                                <span class="badge badge-danger badge-sm">Out of Stock</span>
                                            </td><td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                </a>
                                            </td></tr><tr><td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox" id="customCheck3">
                                                    </div>
                                                    <img class="w-10 ms-3" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/metro-chair.jpg" alt="metro-chair">
                                                    <h6 class="ms-3 my-auto">Metro Bar Stool</h6>
                                                </div>
                                            </td><td class="text-sm">Furniture</td><td class="text-sm">$99</td><td class="text-sm">0134729</td><td class="text-sm">978</td><td>
                                                <span class="badge badge-success badge-sm">in Stock</span>
                                            </td><td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                </a>
                                            </td></tr><tr><td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox" id="customCheck10">
                                                    </div>
                                                    <img class="w-10 ms-3" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/alchimia-chair.jpg" alt="alchimia">
                                                    <h6 class="ms-3 my-auto">Alchimia Chair</h6>
                                                </div>
                                            </td><td class="text-sm">Furniture</td><td class="text-sm">$2,999</td><td class="text-sm">113213</td><td class="text-sm">0</td><td>
                                                <span class="badge badge-danger badge-sm">Out of Stock</span>
                                            </td><td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                </a>
                                            </td></tr><tr><td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox" id="customCheck5">
                                                    </div>
                                                    <img class="w-10 ms-3" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/fendi-coat.jpg" alt="fendi">
                                                    <h6 class="ms-3 my-auto">Fendi Gradient Coat</h6>
                                                </div>
                                            </td><td class="text-sm">Clothing</td><td class="text-sm">$869</td><td class="text-sm">634729</td><td class="text-sm">725</td><td>
                                                <span class="badge badge-success badge-sm">in Stock</span>
                                            </td><td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                </a>
                                            </td></tr><tr><td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox" id="customCheck6">
                                                    </div>
                                                    <img class="w-10 ms-3" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/off-white-jacket.jpg" alt="off_white">
                                                    <h6 class="ms-3 my-auto">Off White Cotton Bomber</h6>
                                                </div>
                                            </td><td class="text-sm">Clothing</td><td class="text-sm">$1,869</td><td class="text-sm">634729</td><td class="text-sm">725</td><td>
                                                <span class="badge badge-success badge-sm">in Stock</span>
                                            </td><td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                </a>
                                            </td></tr><tr><td>
                                                <div class="d-flex">
                                                    <div class="form-check my-auto">
                                                        <input class="form-check-input" type="checkbox" id="customCheck7" checked="">
                                                    </div>
                                                    <img class="w-10 ms-3" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/yohji-yamamoto.jpg" alt="yohji">
                                                    <h6 class="ms-3 my-auto">Y-3 Yohji Yamamoto</h6>
                                                </div>
                                            </td><td class="text-sm">Shoes</td><td class="text-sm">$869</td><td class="text-sm">634729</td><td class="text-sm">725</td><td>
                                                <span class="badge badge-success badge-sm">In Stock</span>
                                            </td><td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                </a>
                                            </td></tr></tbody>

                                    </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 7 of 15 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list"><li class="pager"><a href="#" data-page="1">???</a></li><li class="active"><a href="#" data-page="1">1</a></li><li class=""><a href="#" data-page="2">2</a></li><li class=""><a href="#" data-page="3">3</a></li><li class="pager"><a href="#" data-page="2">???</a></li></ul></nav></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <script type="text/javascript" src="../../assets/js/index.js"></script>

@endsection

