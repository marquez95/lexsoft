<!-- cuando se seleccione o escriba dui existente en la base de datos, autocomplete el input de nombre completo
            en la vista de nuevo Caso    -->
<script type="text/javascript">
var getDocumentoIdentificacion = () => {
    var dui = $('#dui').val();
    console.log(dui);
    if (dui != '') {
        $.ajax({
            url: "<?=base_url()?>/getDocumentoIdentificacion",
            type: "POST",
            data: {
                dui: dui
            },
            success: (respuesta) => {

                var j = JSON.parse(respuesta);
                $('#nombre').val(j.datos[0].primer_nombre + ' ' + j.datos[0].segundo_nombre + ' ' + j
                    .datos[0].tercer_nombre +
                    ' ' + j.datos[0].apellido_paterno + ' ' + j.datos[0].apellido_materno);

            }
        })

    }
}

var getPlantilla = () => {
    var nombre_plantilla = $('#nombre_plantilla').val();
    console.log(nombre_plantilla);
    if (nombre_plantilla != '') {
        $.ajax({
            url: "<?=base_url()?>/getPlantilla",
            type: "POST",
            data: {
                nombre_plantilla: nombre_plantilla
            },

            success: (respuestados) => {
                var jdos = JSON.parse(respuestados);
                const recorrer = jdos.datosdos[0].plantilla;

                variable=/\{\w+\}/g;
                
                variable.test(recorrer);
                if (recorrer) {
                    var nombre = prompt(/\{\w+\}/g);
                    remplazar = recorrer.replace(/\{\w+\}/g, nombre);

                }else{
                    console.log("no reconoce nada")
                }

               

                $("#doc_caso").html(jdos.datosdos[0].plantilla);
                $('.summernote').summernote();
            }


        })
    }



}


$(document).ready(() => {
    $('.summernote').summernote();
    $('#nombre_plantilla').on('change', () => {
            $('.summernote').summernote(
                'destroy'); //funcion para destruir el summernote actual cuando se selecciona la plantilla
            //para reemplazarlo por el nuevo, con la plantilla exportada               
            getPlantilla(); //busca plantilla  

        }),
        $('#dui').on('change', () => {
            getDocumentoIdentificacion();
        })
})
</script>

<!-- cuando se seleccione una plantilla se llene el summernote automaticamente con esa plantilla  -->