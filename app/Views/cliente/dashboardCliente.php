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
                <a href="newCliente" class="small-box bg-secondary">
                <br><div class="inner">
                        <h3><?= $data;?></h3>

                        <p>Registrar cliente</p>
                    </div>
                    <div class="icon">
                    <i class="ion ion-person-add"></i><span class="oi oi-list"></span>
                    <br>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6">
                <a href="<?=base_url('nuevaPlantilla')?>" class="small-box bg-success">
                <br> <div class="inner">
                        <h3><i class="fas fa-plus"></i></h3>

                        <p>Nueva Plantilla</p>
                    </div>
                    <div class="icon">
                    <br> <i class="fas fa-list-ul"></i>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-6">
                <a href="<?=base_url('nuevoCaso')?>" class="small-box bg-primary">
                <br><div class="inner">
                        <h3><i class="fas fa-file-alt"></i></h3>

                        <p>Nuevo Caso</p>
                    </div>
                    <div class="icon">
                    <br><i class="fas fa-plus"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6">
                <a href="<?=base_url('nuevoCaso')?>" class="small-box bg-danger">
                <br><div class="inner">
                <h3>11</h3>

                        <p>Casos pendientes</p>
                    </div>
                    
                    <div class="icon">
                        <i class="fas fa-clock"></i>
                    <br>    
                    </div>
                    
                </a>
                
            </div>
            <div class="col-lg-3 col-6">
                <a href="<?=base_url('nuevoCaso')?>" class="small-box bg-warning">
                <br><div class="inner">
                <h3>30</h3>

                        <p>Casos en proceso</p>
                    </div>
                    <div class="icon">
                    <br> <i class="fas fa-cog"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-6">
                <a href="<?=base_url('nuevoCaso')?>" class="small-box bg-success">
                <br> <div class="inner">
                <h3>15</h3>

                        <p>Casoso finalizados</p>
                    </div>
                    <div class="icon">
                    <br> <i class="fas fa-check-circle"></i>
                    </div>
                </a>
            </div>
            
        </div>
        
    </div>




</section>




<?php include('js/alerts/alerts.php'); ?>