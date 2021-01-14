 <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?=site_url('backend');?>">Menu Utama</a>
<?=isset($pesan) ? "<script>alert('".$pesan."');</script>" : "";?>
        </li>
        <li class="breadcrumb-item active"><a href="<?=site_url('backend/departemen/detail');?>">Tables</a></li>
      </ol>
 <div class="card-header">
          <i class="fa fa-fw fa-table"></i><?=$judul;?></div>
<div class="container-fluid">
    <form role="form" method="post" action="<?=site_url('backend/proseseditdprt')?>">
          <div class="form-group">
            <div class="form-row">
              
              <div class="col-md-12">
                <label >Nama Departemen</label>
                <input type='text' id='nama_dprt' name="nama_dprt" class="form-control" value="<?=$sql->nama_dprt;?>" >
                <input type="hidden" name="nomor" value="<?=$sql->nomor;?>"></p></div>
                 <div class="col-md-12">
                <label >Anggota</label>
                <input type='text' id='anggota' name="anggota" class="form-control" value="<?=$sql->anggota;?>"></p></div>
                
                <button class="btn btn-info" type="submit">Edit Data </button></td>
                 
                         </div>
            </div>
        
        </form>
      </div>