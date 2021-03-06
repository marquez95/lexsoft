
<div class="content-header">
<div class="col-sm-6">
    <h1 class="m-0">Editar Usuario |<small><span class="nav-item d-sm-inline-block">
        
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
          <form method="POST" action="<?= base_url('cliente/UserCliente/update/'.$datos['id_user'])?>">
          <input type="hidden" name="_method" value="PUT" />
            <div class="card-body">
              <div class="row form-group">
                <div class="col">
                <input id="id_creado" name="id_creado" type="hidden" value="">
                <input type="hidden" name="id_creado" value="<?= session('id_user');?>"/>
                  <label for="primer_nombre">*Primer Nombre</label>
                  <input type="text" class="form-control" id="primer_nombre" value="<?= $datos['primer_nombre']; ?>" name="primer_nombre"  required>
                </div>
                <div class="col">
                  <label for="segundo_nombre">Segundo Nombre</label>
                  <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" value="<?= $datos['segundo_nombre']; ?>">
                </div>
                <div class="col">
                  <label for="tercer_nombre">Tercer Nombre</label>
                  <input type="text" class="form-control" id="tercer_nombre" name="tercer_nombre" value="<?= $datos['tercer_nombre']; ?>">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col">
                  <label for="apellido_paterno">*Apellido Paterno</label>
                  <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="<?= $datos['apellido_paterno']; ?>" required>
                </div>
                <div class="col">
                  <label for="apellido_materno">*Apellido Materno</label>
                  <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="<?= $datos['apellido_materno']; ?>" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col">
                  <label for="dui">*Documento de Identificacion</label>
                  <input type="text" class="form-control" id="dui" name="dui" value="<?= $datos['dui']; ?>" required>
                </div>
                <div class="col">
                  <label for="fecha_nacimiento">*Fecha de Nacimiento</label>
                  <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?= $datos['fecha_nacimiento']; ?>" required>
                </div>
              </div>
              <div class="form-group">
                <label for="direccion">Direcci??n</label>
                <input type="direccion" class="form-control" id="direccion" name="direccion" value="<?= $datos['direccion']; ?>">
              </div>
              <div class="row form-group">
                <div class="col">
                
                  <label for="pais">*Pais</label>
                  <input type="text" class="form-control" id="pais" name="pais" value="<?= $datos['pais']; ?>" required>
                </div>
                <div class="col">
                  <label for="departamento">*Departamento</label>
                  <input type="text" class="form-control" id="departamento" name="departamento" value="<?= $datos['departamento']; ?>">
                </div>
                <div class="col">
                  <label for="municipio">*Municipio</label>
                  <input type="text" class="form-control" id="municipio" name="municipio"value="<?= $datos['municipio']; ?>">
                </div>
              </div>
              
              <div class="form-group">
                <label for="username">*Username</label>
                <input type="username" class="form-control" id="username" name="username" value="<?= $datos['username']; ?>" readonly>
              </div>
              <div class="row form-group">
              <div class="col">
                <label for="numero_telefono">Telefono</label>
                <input type="num" class="form-control" id="numero_telefono" name="numero_telefono" value="<?= $datos['numero_telefono']; ?>">
              </div>
              <div class="col">
                <label for="email">*Email</label>
                <input type="email" class="form-control" id="email" name="email"value="<?= $datos['email']; ?>" required>
              </div>              
              </div>
              
              <div class="form-group">
                <label for="password">*Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="nueva contrase??a" required>
              </div>
              <div class="form-group">
                <label for="type">*Tipo de Usuario</label>
                <input type="text" class="form-control" id="type" name="type" value="<?= $datos['type']?>" readonly>
              </div>
              
            </div>


            <div class="card-footer">
              <button type="submit" class="btn btn-success">Actualizar</button>
              <a href="<?= site_url('inicio')?> " class="btn btn-danger">Cancelar</a>
              
            </div>
         </form>  
         </div>
        </div>
     </div>
 </div>
         
          
</section>
<!-- /.card -->




