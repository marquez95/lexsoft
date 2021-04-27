<div class="content-header">
    <div class="col-sm-6">
        <h1 class="m-0">Caso nuevo<small><span class="nav-item d-sm-inline-block">

                </span></small></h1>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-sm">
                    <p></p>
                    <!-- general form elements -->
                    <div class="card card-primary">

                        <!-- /.card-header -->
                        <!-- form start -->


                        <form method="POST" action="<?= base_url('cliente/Casos/insert_caso')?>">

                            <div class="card-body">
                                <!--  id del abogado -->
                                <input type="hidden" name="id_cliente" value="<?= session('id_user');?>" />

                                <!--  id del cliente del abogado -->
                                <?php foreach($datos as $key): ?>
                                <input type="hidden" name="id_consultante" value="<?= $key->id_user ?>" />
                                <?php endforeach; ?>


                                <label for="dui" class="form-label">Documento de identidad</label>
                                <input class="form-control" list="documento" id="dui" name="dui"
                                    placeholder="Escriba el numero de identificacion">
                                <datalist id="documento">
                                    <?php foreach($datos as $key): ?>
                                    <option value="<?= $key->dui ?>">
                                        <?php endforeach; ?>
                                </datalist>


                                <div class="row form-group">
                                    <label for="direccion">Nombre Completo</label>
                                    <input type="direccion" class="form-control" id="nombre" name="nombre" readonly>
                                </div>
                                <br>
                                <div class="row form-group">
                                    <label for="type">Estado</label>
                                    <select class="custom-select form-control-border" id="estado" name="estado">
                                        <option selected="true" disabled="disabled">Estado del caso</option>
                                        <option value="pendiente">Pendiente</option>
                                        <option value="proceso">En Proceso</option>
                                    </select>
                                </div>
                                <br>
                                <div class="container py-3 text-black-50">
                                    <div class="row">

                                        <div class="col-md-12">

                                            

                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="idFile">
                                                    <!-- <label class="input-group-text" for="inputGroupFile01">Subir</label> -->
                                                </div>

                                                <button type="button" class="btn btn-primary" id="btn-form-doc">Ingresar
                                                    Datos</button>
                                            
                                        </div>
                                        <div class="col-md-12">

                                            <div class="border p-2 my-2 d-none" hidden id="outputFile"></div>
                                        </div>
                                        <div class="col-md-12">

                                            <div class="card card-outline card-info">

                                                <!-- <textarea name="doc_caso" id="doc_caso" cols="30" rows="10"></textarea> -->
                                                <textarea class="" name="doc_caso" id="doc_caso" cols="30"
                                                    rows="10"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                
                                <div class="modal fade" id="idModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ingreso de valores</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                            </div>
                                            <div class="modal-body" id="idModalBody">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" id="btn-add">Agregar</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Agregar</button>
                        <a href="<?= site_url('inicio')?> " class="btn btn-danger">Cancelar</a>

                    </div>
                    </form>





                </div>
            </div>
        </div>
</div>


</section>


</div>
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

/* var getPlantilla = () => {
    var nombre_plantilla = $('#nombre_plantilla').val();
    console.log(nombre_plantilla);
    if (nombre_plantilla != '') {
        $.ajax({
            url: "/getPlantilla",
            type: "POST",
            data: {
                nombre_plantilla: nombre_plantilla
            },

            success: (respuestados) => {
                var jdos = JSON.parse(respuestados);
                const recorrer = jdos.datosdos[0].plantilla;


                if (recorrer.includes('{nombre}')) {
                    var escrito = prompt('{nombre}');
                    console.log(remplazar = recorrer.replace('{nombre}', escrito));

                    if (remplazar.includes('{apellido}')) {
                        var escrito = prompt('{apellido}');
                        console.log(remplazardos = remplazar.replace('{apellido}', escrito));


                        $("#doc_caso").html(remplazardos);
                        $('.summernote').summernote();
                    }

                    $("#doc_caso").html(remplazar);
                    $('.summernote').summernote();
                }

                $("#doc_caso").html(jdos.datosdos[0].plantilla);
                $('.summernote').summernote();
            }


        })
    }



} */


$(document).ready(() => {
    
        $('#dui').on('change', () => {
            getDocumentoIdentificacion();
        })
})
</script>

<!-- cuando se seleccione una plantilla se llene el summernote automaticamente con esa plantilla  -->