   <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?=site_url('backend');?>">Menu Utama</a>
<?=isset($pesan) ? "<script>alert('".$pesan."');</script>" : "";?>
        </li>
        <li class="breadcrumb-item active"><a href="<?=site_url('backend/pelamar/detail');?>">Tables</a></li>
      </ol>
 <div class="card-header">
          <i class="fa fa-fw fa-table"></i><?=$judul;?></div>
 <div class="container-fluid">
    <form role="form" method="post" action="<?=site_url('backend/prosestambahpel')?>">
          <div class="form-group">
            <div class="form-row">
              
               <div class="col-md-12">
              <label >Nomor</label>
                <input type='text' id='no' name="no" class="form-control" ></p></div>

              <div class="col-md-12">
                <label >Tanggal</label>
                <input type='date' id='tgl' name="tgl" class="form-control" ></p></div>
                 
                 <div class="col-md-12">
                <label >Waktu</label>
                <input type='time' id='waktu' name="waktu" class="form-control" ></p></div>
                <div class="col-md-12">
                   <label >Durasi</label>
                <input type='text' id="durasi" name="durasi" class="form-control" ></p></div>
                 <div class="col-md-12">
                   <label >Departemen</label>
                <input type='text' id="depar" name="depar" class="form-control" ></p></div>
                 <div class="col-md-12">
                   <label >Keterangan</label>
                <input type='text' id="ket" name="ket" class="form-control" ></p></div> 
                
                <button class="btn btn-primary" type="submit">Tambah Data </button></td>
                
                 
                         </div>
            </div>
        
        </form>
      </div>