<div class="content-header">
    <div class="col-sm-6">
        <h1 class="m-0">Listar |
            <small><span class="nav-item d-sm-inline-block">
                    <a href="<?= site_url('newUser')?>" class="nav-link">Agregar</a>

                </span>
            </small>
            <a class="btn btn-navbar" href="<?= site_url('buscar')?>">
                <i class="fas fa-search"></i>
            </a>
        </h1>



    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Usuarios del sistema Lexsoft</h3>


                </div>


                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Nombre Completo</th>
                                <th>Usuario</th>
                                <th>Tipo</th>
                                <th>Correo</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                            
                            <?php foreach($datos as $key): ?>
                        <tbody>
                            <tr>
                                <td><?= $key->primer_nombre ?> <?= $key->segundo_nombre ?>
                                    <?= $key->apellido_paterno?> <?= $key->apellido_materno ?></td>
                                <td><?= $key->username?></td>
                                <td><?= $key->type?></td>
                                <td><?= $key->email?></td>
                                
                                <td>
                                    <a href="<?= base_url('admin/User/editUser/'.$key->id_user);?>"
                                        class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/user/delete_user/'.$key->id_user)?>"
                                        class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; ?>
                        </thead>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>




</div>



<?php include('alerts/alerts.php'); ?>