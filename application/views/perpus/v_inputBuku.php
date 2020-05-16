<br>
<br>
<br>
<br>
<br>
<h1>Input Buku</h1>    
<form action="<?php echo base_url('buku/create_proses'); ?>" method="post" >
 <div class="form-row">
  <div class="col-4">
    <label >JUDUL</label>
    <input type="text" class="form-control" name="judul">
  </div>
  <div class="col-4">
    <label>PENULIS</label>
    <input type="text" class="form-control" name="penulis">
  </div>
</div>  
<div class="form-row align-items-center">
 <div class="col-auto my-1">
  <label>KATEGORI</label>
  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="kategori">
    <option selected>Pilih...</option>
    <option value="Komik">Komik</option>
    <option value="Drama">Drama</option>
    <option value="Konspirasi">Konspirasi</option>
    <option value="Biografi">Biografi</option>
    <option value="Ilmiah">Ilmiah</option>
  </select>
</div>  
<div class="col-1">
 <label >STOK</label>
 <input type="text" class="form-control" name="stock" >               
</div>
</div>   
<!-- <div class="spinner-border" role="status"> -->  
<button type="submit" class="btn btn-success">Add Buku</button>
<!-- </div> -->
</form>
























<!-- <div class="col-auto my-1">
    <div class="custom-control custom-checkbox mr-sm-2">
      <label >TANGGAL</label>
      <input type="date" class="form-control" name="tanggal" >
    </div>
  </div> 
  <br>
  <form method="post" enctype="multipart/form-data">
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="file" name="attachment">
      <label class="custom-file-label" for="customFile" id="fileUpload" >Choose file</label>
    </div> -->