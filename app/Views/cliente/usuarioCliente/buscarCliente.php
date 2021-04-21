
<div class="content-header">
<div class="col-sm-6">
    <h1 class="m-0">Buscar |<small><span class="nav-item d-sm-inline-block">
        <a href="<?= site_url('newCliente')?>" class="nav-link">Agregar</a>
      </span></small></h1>
</div>


        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Usuarios del sistema Lexsoft</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tabla1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Documento de identidad</th>
                    <th>Fecha Nacimiento</th>
                    <th>Direccion</th>

                   
                  </tr>
                  
                  </thead>
                  <?php foreach($datos as $key): ?>
                      <tbody>
                    <tr>
                      <td><?= $key->primer_nombre ?> <?= $key->segundo_nombre ?>  <?= $key->apellido_paterno?>  <?= $key->apellido_materno ?></td>
                      <td><?= $key->dui?></td>
                      <td><?= $key->fecha_nacimiento?></td>
                      <td><?= $key->direccion?>, <?= $key->municipio?>, <?= $key->departamento?>, <?= $key->pais?></td>
                      
                      
                    </tr>
                  </tbody>
                    <?php endforeach; ?>
                  <tfoot>
                  <tr>
                  <th>Nombre</th>
                    <th>Documento de identidad</th>
                    <th>Usuaio</th>
                    <th>Direccion</th>

                   
                   
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>

