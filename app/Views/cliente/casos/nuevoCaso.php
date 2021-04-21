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

                                    <div class="form-group">
                                        <label for="type">*DUI CLIENTE</label>
                                        <input type="direccion" class="form-control" id="direccion" name="direccion" value="">
                                    </div>

                                </div>
                                <div class="row form-group">
                                    <label for="direccion">Nombre</label>
                                    <input type="direccion" class="form-control" id="direccion" name="direccion"
                                        value="" readonly>
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
                                    <label for="type">Seleccionar plantilla</label>
                                    <select class="custom-select form-control-border" id="type" name="type">
                                        <option selected="true" disabled="disabled">Seleccionar plantilla a trabajar</option>
                                        <option value="admin">Actas Constitutivas de Compañías</option>
                                        <option value="cliente">Sociedades Civiles</option>
                                        <option value="consultante">Firmas Personales</option>
                                        <option value="consultante">Venta de Inmuebles</option>
                                        <option value="consultante">Venta de Muebles</option>
                                        <option value="consultante">Permuta</option>
                                        <option value="consultante">Arrendamiento</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="card card-outline card-info">

                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <textarea id="summernote">

                                            imprimir mediante php el contedio guaradado en una tabla llamada plantilla
                                            </textarea>
                                        </div>
                                        <div class="card-footer">

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


    <!-- /.card -->