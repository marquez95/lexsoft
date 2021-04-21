

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard <?= session('nombre');?> <?= session('apellido');?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
        <div class="row">
          <div class="col-lg-3 col-6">
            <a href="newCliente" class="small-box bg-warning">
              <div class="inner">
                <h3><?= $data;?></h3>

                <p>Registrar cliente</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i><span class="oi oi-list"></span>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-6">
            <a href="<?=base_url('listarCliente')?>" class="small-box bg-success">
              <div class="inner">
                <h3><?= $data;?><small></small></h3>

                <p>Ver clientes</p>
              </div>
              <div class="icon">
              <i class="fas fa-list-ul"></i>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-6">
            <a href="<?=base_url('nuevoCaso')?>" class="small-box bg-success">
              <div class="inner">
                <h3><i class="fas fa-plus"></i></h3>

                <p>Nuevo Caso</p>
              </div>
              <div class="icon">
              <i class="fas fa-plus"></i>
              </div>
            </a>
          </div>
        </div>
      </div>

            
              
          
    </section>
        

