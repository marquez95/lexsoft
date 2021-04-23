

<div class="content-header">
<div class="col-sm-6">
    <h1 class="m-0">Agregar Plantilla</h1>
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
          <form method="POST" action="<?= base_url('insertarPlantilla')?>">
            <div class="card-body">
              <div class="row form-group">
              <input type="hidden" name="id_creado" value="<?= session('id_user');?>"/>
        
              </div>
              <div class="form-group">
                <label for="nombre_plantilla">Nombre de la nueva plantilla</label>
                <input type="nombre_plantilla" class="form-control" id="nombre_plantilla" name="nombre_plantilla" placeholder="Escriba el nombre con el cual identificara la plantilla creada">
              </div>

              <label for="summernote">Redactar formato de plantilla</label>
              <p><span><small>No olvides dejar identificado los espacios que se llenan al abrir un nuevo caso, ejemplo: "nombre cliente", 
              "documento de identificacion", "direccion", entre otros.</small></span></p>
              <textarea class="summernote" name="plantilla" id="plantilla" cols="30" rows="10" >
                
              </textarea>

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






