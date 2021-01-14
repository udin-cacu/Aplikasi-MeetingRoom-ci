   <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?=site_url('backend');?>">Menu Utama</a>
<?=isset($pesan) ? "<script>alert('".$pesan."');</script>" : "";?>
        </li>
        <li class="breadcrumb-item active"><a href="<?=site_url();?>">Tables</a></li>
      </ol>
 <div class="card-header">
          <i class="fa fa-fw fa-table"></i><?=$judul;?></div>
 <div class="container-fluid">
    <form role="form" method="post" action="<?=site_url('backend/prosestambahlogin')?>">
          <div class="form-group">
            <div class="form-row">
              
                <div class="col-md-12">
                <label >id</label>
                <input type='text' id='id' name="id" class="form-control" ></p></div>
                <div class="col-md-12">
                <label >nama</label>
                <input type='text' id='nama' name="nama" class="form-control" ></p></div>
                <div class="col-md-12">
                <label >user</label>
                <input type='text' id="user" name="user" class="form-control" ></p></div>
                <label >pass</label>
                <input type='md5' id="pass" name="pass" class="form-control" ></p></div>
                                 
                <button class="btn btn-primary" type="submit">Tambah Data </button></td>
                
                 
               </div>
            </div>
        
        </form>
      </div>