   <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?=site_url('backend');?>">Menu Utama</a>
<?=isset($pesan) ? "<script>alert('".$pesan."');</script>" : "";?>
        </li>
        <li class="breadcrumb-item active"><a href="<?=site_url('backend/absen/detail');?>">Tables</a></li>
      </ol>
 <div class="card-header">
          <i class="fa fa-fw fa-table"></i><?=$judul;?></div>
 <div class="container-fluid">
    <form role="form" method="post" action="<?=site_url('backend/prosestambahabsen')?>">
          <div class="form-group">
            <div class="form-row">
              
               <div class="col-md-12">
              <label >NIP</label>
                <input type='text' id='nip' name="nip" class="form-control" ></p></div>

              <div class="col-md-12">
                <label >Nama</label>
                <input type='text' id='nama' name="nama" class="form-control" ></p></div>
                 
                 <div class="col-md-12">
                <label >Departemen</label>
                <input type='text' id='departemen' name="departemen" class="form-control" ></p></div>
                <div class="col-md-12">
                   <label >Bagian</label>
                <input type='text' id="bagian" name="bagian" class="form-control" ></p></div>
                 <div class="col-md-12">
                   
                <button class="btn btn-primary" type="submit">Tambah Data </button></td>
                
                 
                         </div>
            </div>
        
        </form>
      </div>