
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?=site_url('backend');?>">Menu Utama</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <?=isset($pesan) ? "<script>alert('".$pesan."');</script>" : "";?>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-fw fa-table"></i><?=$judul;?></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr bgcolor="#00fff">
                  <th>No</th>
                  <th>Nama Departemen</th>
                  <th>Anggota</th>
                  <th>Aksi</th>
                </tr>
              </thead>
             <tbody>
             	<?php  
             	foreach ($departemen as $key) {
             		# code...
             	?>
                <tr>
                  <td><?=$key->nomor;?></td>
                  <td><?=$key->nama_dprt;?></td>
                  <td><?=$key->anggota;?></td>

                  <td><center><a href="<?=site_url('backend/deletdprt/'.$key->nomor)?>" class="btn btn-danger">Hapus</a> 
                    <a href="<?=site_url('backend/editdprt/'.$key->nomor)?>" class="btn btn-info">Edit</a></center></td>

                </tr>
                <?php 
                  }
                 ?>

          
            </tbody>
            <tfooter>
              <tr>
                <td colspan="11"> <a href="<?=site_url('backend/tambahdprt')?>"><button class="btn btn-primary" type="button">Tambah Data </button></td>
              </tr>
            </tfooter>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   