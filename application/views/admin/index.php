<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 "><?= $title; ?></h1>
    <div class="row d-flex justify-content-center">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-lg font-weight-bold text-success text-uppercase mb-1">User</div>
                  
                </div>
                <div class="col-auto">
                  <i class="fas fa-users fa-2x "></i>
                </div>
              </div>
              <hr>
              <div class="row d-flex justify-content-center">
                
                <div class="col mr-2">
                	<div class="h5 mb-0 font-weight-bold "><?= count($users); ?></div>
                  
                  
                </div>
                <div class="col-auto">
                	<a href="<?=base_url('user/list'); ?>" class="text-xs font-weight-bold text-uppercase text-center">Lihat Data</a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Surat Masuk -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-lg font-weight-bold text-success text-uppercase mb-1">Surat Masuk</div>
                  
                </div>
                <div class="col-auto">
                  <i class="fas fa-envelope fa-2x "></i>
                </div>
              </div>
              <hr>
              <div class="row d-flex justify-content-center">
                
                <div class="col mr-2">
                	<div class="h5 mb-0 font-weight-bold "><?= count($surat_masuk); ?></div>
                  
                  
                </div>
                <div class="col-auto">
                	<a href="<?=base_url('surat_masuk'); ?>" class="text-xs font-weight-bold text-uppercase text-center">Lihat Data</a>
                </div>
              </div>

            </div>
          </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-lg font-weight-bold text-success text-uppercase mb-1">Stok Barang</div>
                  
                </div>
                <div class="col-auto">
                  <i class="fas fa-archive fa-2x "></i>
                </div>
              </div>
              <hr>
              <div class="row d-flex justify-content-center">
                
                <div class="col mr-2">
                	<div class="h5 mb-0 font-weight-bold "><?= count($barang); ?></div>
                  
                  
                </div>
                <div class="col-auto">
                	<a href="<?=base_url('barang'); ?>" class="text-xs font-weight-bold text-uppercase text-center">Lihat Data</a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-lg font-weight-bold text-success text-uppercase mb-1">Surat Keluar</div>
                  
                </div>
                <div class="col-auto">
                  <i class="fas fa-envelope fa-2x "></i>
                </div>
              </div>
              <hr>
              <div class="row d-flex justify-content-center">
                
                <div class="col mr-2">
                	<div class="h5 mb-0 font-weight-bold "><?= count($surat_keluar); ?></div>
                  
                  
                </div>
                <div class="col-auto">
                	<a href="<?=base_url('surat_keluar'); ?>" class="text-xs font-weight-bold text-uppercase text-center">Lihat Data</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

          <!-- Content Row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 