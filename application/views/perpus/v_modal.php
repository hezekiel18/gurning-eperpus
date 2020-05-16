 <!--                                   Modal EDIT  BUKU                                       -->

        <div class="modal fade" id="editmodal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Edit Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('buku/upd_proses'); ?>" method="post" >  
                  <div class="form-group">        
                    <label for="recipient-name" class="col-form-label">ID BUKU</label>
                    <input type="text" readonly class="form-control-plaintext" id="id" name="id" >
                  </div>            
                  <div class="form-group">        
                    <label for="recipient-name" class="col-form-label">JUDUL</label>
                    <input type="text"  class="form-control" id="judul" name="judul" >
                  </div>      
                  <div class="form-group">        
                    <label for="recipient-name" class="col-form-label">PENULIS</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" >
                  </div>                  
                  <div class="form-group">        
                    <label for="recipient-name" class="col-form-label">KATEGORI</label>
                    <select class="custom-select mr-sm-2" id="kategori" name="kategori" >
                      <option selected>Pilih...</option>
                      <option value="Komik">Komik</option>
                      <option value="Drama">Drama</option>
                      <option value="Konspirasi">Konspirasi</option>
                      <option value="Biografi">Biografi</option>
                      <option value="Ilmiah">Ilmiah</option>        
                    </select>
                  </div>                  
                  <div class="form-group">        
                    <label for="recipient-name" class="col-form-label">STOK</label>
                    <input type="text" class="form-control-plaintext" id="stock" name="stock" >
                  </div>                                    
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>


        <!--                                   Modal PINJAM  BUKU                                       -->

        <div class="modal fade" id="modalpinjam" data-backdrop="static"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
             <div class="modal-header">
              <h5 class="modal-title">Detail Peminjaman</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url('buku/pinjam_proses'); ?>" method="post" >
                <input type="hidden" name="status" value="meminjam">
                <input type="hidden" id="id2" name="id">  
                <input type="hidden" id="stok" name="stok">                                                                    
                <div class="form-group">                  
                  <label for="recipient-name" class="col-form-label">JUDUL</label>
                  <input type="text" readonly class="form-control-plaintext" id="judul2" name="judul" >                         
                </div>          
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">PENULIS</label>
                  <input type="text" readonly class="form-control-plaintext" id="penulis2" name="penulis" >
                </div>          
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">KATEGORI</label>
                  <input type="text" readonly class="form-control-plaintext" id="kategori2" name="kategori" >
                </div>          
                <div class="form-row align-items-center">
                  <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                      <label >TANGGAL PEMINJAMAN</label>
                      <input type="date" class="form-control" name="tanggal" >
                    </div>
                  </div>
                  <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                      <label >TANGGAL PENGEMBALIAN</label>
                      <input type="date" class="form-control" name="tanggal" >
                    </div>
                  </div> 
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button  id="btnP" class="btn btn-primary">Pinjam</button>                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>   
      </div>

                                                 <!-- Modal Pengembalian -->
      <div class="modal fade" id="kembalimodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div class="alert alert-danger" role="alert"> 
                <h5 class="modal-title" id="title">ANDA BELUM MENGEMBALIKAN BUKU !!</h5>
              </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?php echo base_url('buku/kembali_proses'); ?>" method="post">
              <div class="modal-body">                                      
                <h2>Riwayat Peminjaman</h2>                                                     
                <hr>
                <h5>Judul    : <label id="judul3"></label></h5>                                                     
                <hr>
                <h5>Penulis  :<label id="penulis3"></label></h5>                                     
                <hr>
                <h5>Kategori :<label id="kategori3"></label></h5>                                     
                <div class="modal-footer">  
                  <div class="alert alert-info" role="alert"> 
                    <a>Kembalikan Buku ?</p>               
                    </div>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Ya</button>
                  </div>
                </form>
              </div>
            </div>
          </div>                                             