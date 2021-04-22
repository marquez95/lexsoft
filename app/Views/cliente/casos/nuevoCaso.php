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


                        <form method="POST" action="<?= base_url('cliente/userCliente/insert_user')?>">
                            <div class="card-body">

                                <div class="row form-group">
                                    <input type="hidden" name="id_creado" value="<?= session('id_user');?>" />

                                    <label for="dui" class="form-label">Documento de identidad</label>
                                    <input class="form-control" list="documento" id="dui" name="dui"
                                        placeholder="Escriba el numero de identificacion">
                                    <datalist id="documento">
                                        <?php foreach($datos as $key): ?>
                                        <option value="<?= $key->dui ?>">
                                            <?php endforeach; ?>
                                    </datalist>

                                </div>
                                <div class="row form-group">
                                    <label for="direccion">Nombre Completo</label>
                                    <input type="direccion" class="form-control" id="nombre" name="nombre"
                                         readonly>
                                </div>
                                <br>
                                <div class="row form-group">
                                    <label for="type">Estado</label>
                                    <select class="custom-select form-control-border" id="type" name="type">
                                        <option selected="true" disabled="disabled">Estado del caso</option>
                                        <option value="pendiente">Pendiente</option>
                                        <option value="proceso">En Proceso</option>
                                        <option value="finalizado">Finalizado</option>
                                    </select>
                                </div>
                                <br>
                                
                                <div class="row form-group">
                                    <input type="hidden" name="id_creado" value="<?= session('id_user');?>" />

                                    <label for="nombre_plantilla" class="form-label">Plantilla</label>
                                    <input class="form-control" list="documento2" id="nombre_plantilla" name="nombre_plantilla"
                                        placeholder="Escriba el numero de identificacion">
                                    <datalist id="documento2">
                                        <?php foreach($plantilla as $key2): ?>
                                        <option value="<?= $key2->nombre_plantilla ?>">
                                            <?php endforeach; ?>
                                    </datalist>

                                </div>
                                <div class="row form-group">
                                    <label for="plantillaValue">Nombre Completo</label>
                                    <input type="plantillaValue" class="form-control" id="plantillaValue" name="plantillaValue"
                                         readonly>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="card card-outline card-info">

                                        <textarea name="texto" id="texto" cols="30" rows="10"></textarea>
                                        <div class="summernote" name="texto" id="texto" cols="30" rows="10" value=""></div>

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
        var getDocumentoIdentificacion=()=>{
            var dui=$('#dui').val();
            console.log(dui);
            if (dui !='') {
                $.ajax({
                url: "<?=base_url()?>/getDocumentoIdentificacion",
                type: "POST",
                data: {
                    dui:dui
                },
                success: (respuesta)=>{
                    
                    var j = JSON.parse(respuesta);
                    $('#nombre').val(j.datos[0].primer_nombre+' '+j.datos[0].segundo_nombre+' '+j.datos[0].tercer_nombre
                    +' '+j.datos[0].apellido_paterno+' '+j.datos[0].apellido_materno);
                    
                } 
                })
                
            }
        }

        var getPlantilla=()=>{
            var nombre_plantilla=$('#nombre_plantilla').val();
            console.log(nombre_plantilla);
            if (nombre_plantilla !='') {
                $.ajax({
                    url:"<?=base_url()?>/getPlantilla",
                    type: "POST",
                    data: {
                        nombre_plantilla:nombre_plantilla
                },
                
                success: (respuestados)=>{
                    var jdos = JSON.parse(respuestados);
                    $("#texto").val(jdos.datosdos[0].plantilla);
                    
                }
                })
            }
        }

        
        $(document).ready(()=>{
            $('#nombre_plantilla').on('change',()=>{
                getPlantilla(); 
            }),
            $('#dui').on('change',()=>{
                getDocumentoIdentificacion(); 
            })
        })

    </script>

    <!-- cuando se seleccione una plantilla se llene el summernote automaticamente con esa plantilla  -->                            
            