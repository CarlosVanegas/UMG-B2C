console.log("index");
var protocol = window.location.protocol;
var hostName = window.location.hostname;
var url      = protocol + "//" +  hostName;
console.log(url);
(function( $ ){
    $('#moduleSelect').on('change', function() {
        let SubModules = [];
        let idSubmodule = this.value;
        var myHeaders = new Headers();
        var requestOptions = {
            method: 'GET',
            headers: myHeaders,
            redirect: 'follow'
        };
        let count = 0;
        fetch(url+"/get/submodueles/"+idSubmodule, requestOptions)
            .then(response => response.json())
            .then(result => {
                SubModules.push('DATA',result);
                $("#numero_submodules").text(result.length);
                $("#submodules_count").val(result.length);
                $( ".d-flex" ).remove();
                $( ".horizontal" ).remove();
                result.forEach((values,keys)=>{
                    count++;
                   $( "#containerSubmodules" ).append( "<div class=\"d-flex\">\n" +
                        "                                        <img style=\" max-width: 20%; \" class=\"width-48-px\" src=\"https://www.svgrepo.com/show/335327/bullet.svg\" alt=\"logo_spotify\">\n" +
                        "                                        <div class=\"my-auto ms-3\">\n" +
                        "                                            <div class=\"h-100\">\n" +
                        "                                                <h6 class=\"mb-0\">"+values.nombre+"</h6>\n" +
                        "                                            </div>\n" +
                        "                                        </div>\n" +
                        "                                        <p id=\"status_"+ count +"\" class=\"text-sm text-secondary ms-auto me-3 my-auto\">Activo</p>\n" +
                        "                                        <input type=\"hidden\" name=\"sub_module_"+ count +"\" value="+values.id_submodule+" > \n" +
                        "                                        <div class=\"form-check form-switch my-auto\">\n" +
                        "                                            <input id=\"check_"+ count +"\" name=\"status_"+ count +"\"  class=\"form-check-input\" checked=\"\" type=\"checkbox\"  value=\"1\">\n" +
                        "                                        </div>\n" +
                        "                                    </div><hr class=\"horizontal dark\">" );
                })
                $('input[type=checkbox]').on('change', function() {
                    let status = '';
                    let check;
                    if ($(this).is(':checked') ) {
                        status = $(this).prop("id").replace('check_','status_');
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


    });


    $('#departamentSelect').on('change', function() {
        let departament = $('#departamentSelect').find(":selected").text();
        $("#name_departament").val(departament);

        let SubModules = [];
        let idSubmodule = this.value;
        var myHeaders = new Headers();
        var requestOptions = {
            method: 'GET',
            headers: myHeaders,
            redirect: 'follow'
        };
        let count = 0;
        fetch(url+"/get/municipios/"+idSubmodule, requestOptions)
            .then(response => response.json())
            .then(result => {
                $("#numero_submodules").text(result.length);
                $("#submodules_count").val(result.length);
                $( ".muunicipioss" ).remove();
                result.forEach((values,keys)=>{
                    $( "#muncipios" ).append("<option class='muunicipioss' value=\""+values.id_minicipio+"\">"+values.name+"</option>");
                })
            })
            .catch(error => console.log('error', error));


    });

    //
    $("#muncipios").on('change',function (){
        let municipio = $('#muncipios').find(":selected").text();
        $("#name_municipio").val(municipio);
    });

    $(document).ready(function() {
        $('#example').DataTable( {
            deferRender:    true,
            scrollY:        200,
            scrollCollapse: true,
            scroller:       true
        } );
    } );

})( jQuery );


