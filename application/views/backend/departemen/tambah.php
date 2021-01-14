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
    <form role="form" method="post" action="<?=site_url('backend/prosestambahdprt')?>">
          <div class="form-group">
            <div class="form-row">
              
              <div class="col-md-12">
                <label >No</label>
                <input type='text' id='nomor' name="nomor" class="form-control" ></p></div>
                 <div class="col-md-12">
               <label >Nama Departemen</label>
                <input type='text' id='nama_dprt' name="nama_dprt" class="form-control" ></p></div>
                 <div class="col-md-12">
                <label >Anggota</label>
                <input type='text'  name="anggota" class="form-control" ></p></div>
                <div class="col-md-12">
                  
                
                <button type="submit">Smpan</button>
                 
                         </div>
            </div>
        
        </form>
      </div>