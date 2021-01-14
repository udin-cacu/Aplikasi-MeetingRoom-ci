 <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?=site_url('backend');?>">Menu Utama</a>
<?=isset($pesan) ? "<script>alert('".$pesan."');</script>" : "";?>
        </li>
        <li class="breadcrumb-item active"><a href="<?=site_url('backend/hasil/detail');?>">Tables</a></li>
      </ol>
 <div class="card-header">
          <i class="fa fa-fw fa-table"></i><?=$judul;?></div>
<div class="container-fluid">
    <form role="form" method="post" action="<?=site_url('backend/prosesedithasil')?>">
          <div class="form-group">
            <div class="form-row">
              
                <div class="col-md-12">
                <label >Nama Departemen</label>
                <input type='text' id='departemen' name="departemen" class="form-control" value="<?=$sql->departemen;?>" >
                <input type="hidden" name="tgl" value="<?=$sql->tgl;?>"></p></div>
                 <div class="col-md-12">
                <label >Hasil</label>
                <input type='text' id='hasil' name="hasil" class="form-control" value="<?=$sql->hasil;?>"></p></div>
                                
                <button class="btn btn-info" type="submit">Edit Data </button></td>
                 
                         </div>
            </div>
        
        </form>
      </div>