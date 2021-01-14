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
    <form role="form" method="post" action="<?=site_url('backend/prosestambahhasil')?>">
          <div class="form-group">
            <div class="form-row">
              
                <div class="col-md-12">
                <label >Tanggal</label>
                <input type='date' id='tgl' name="tgl" class="form-control" ></p></div>
                <div class="col-md-12">
                <label >Departemen</label>
                <select type='text' id='departemen' name="departemen" class="form-control" >
                <option value="">- Pilih</option>
                  <option value="Islam">HRD</option>
                  <option value="Kristen">FROZEN</option>
                  <option value="Hindu">SALES</option>
                </select>
                </p></div>
                <div class="col-md-12">
                <label >Hasil Meeting</label>
                <input type='text' id="hasil" name="hasil" class="form-control" ></p></div>
               
                

                <div class="col-md-12">
                <button class="btn btn-primary" type="submit">Tambah Data </button>
                
                 
               </div>
            </div>
        
        </form>
      </div>