  <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Info Section !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
  <section class="portfolio bg-info" id="info">          
    <div class="container ">      
      <br>
      <h2 class="text-center text-uppercase text-white">Info</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">E-Perpus merupakan projek akhir dari mata kuliah Pemrograman di Universitas Brawijaya Fakultas Ilmu Komputer Semester 4.</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">Dalam sistem informasi ini terdapat view untuk admin dan untuk user. Dimana admin dapat melakukan CRUD secara lengkap sedangkan user dapat melihat list buku,
           mencari berdasarkan kategori, serta meminjam dan mengembalikan buku.  </p>
        </div>
      </div>
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="#">
          <i class="fas fa-download mr-2"></i>
          Selamat mencoba :)
        </a>
      </div>
    </div>    
</section>


<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! List Buku Section !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->  
  <section class="portfolio" id="booklist">     
  <div class="container">     
          <!--!!!!!!!!!!!!!!!!!!!! Ini untuk menampilkan Tulisan List Buku  !!!!!!!!!!!!!!!!!!!!!!!!-->  
          <header>
        <h1 class="text-center text-uppercase text-secondary mb-0"><font face="Algerian">List Buku</font></h1>          
        </header>
        <!--!!!!!!!!!!!!!!!!!!!! akhir kode  !!!!!!!!!!!!!!!!!!!!!!!!--> 



<!--!!!!!!!!!!!!!!!!!!!! Kode untuk menampilkan navigation bar untuk search buku sesuai kategori dan melihat seluruh list buku  !!!!!!!!!!!!!!!!!!!!!!!!-->  
          <header>
  <nav  class="navbar navbar-expand-lg navbar-light ">
    <a  class="navbar-brand" href="<?php echo base_url('buku/user_read/#booklist'); ?>">All Buku</a>        
    <a  class="navbar-brand" ></a>        
    <a  class="navbar-brand" >/</a>            
    <div  class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul  class="navbar-nav mr-auto">            
        <li class="nav-item">
          <a id="btnkembali" class="nav-link <?= isset($_COOKIE['status'])? "badge-warning" : "disabled" ;?>" onclick="return pengembalian()" 
            data-judul="<?php echo isset($_COOKIE['judul'])? $_COOKIE['judul'] : "Tidak ada" ;?>"
            data-penulis="<?php echo isset($_COOKIE['penulis'])? $_COOKIE['penulis'] : "Tidak ada" ;?>"
            data-kategori="<?php echo isset($_COOKIE['kategori'])? $_COOKIE['kategori'] : "Tidak ada" ;?>"
            tabindex="-1" aria-disabled="true"><?= isset($_COOKIE['status'])? "Pengembalian Buku" : "Tidak sedang meminjam Buku" ;?></a>                    
          </li>      
          <a  class="navbar-brand" ></a>  
          <a  class="navbar-brand" >/</a>        
          <a  class="navbar-brand" ></a>        
          <form class="form-inline my-5 my-lg-0" action="<?php echo base_url('buku/search_proses/#booklist'); ?>" method="post">
            <input id="search" class="form-control mr-sm-2" type="search" name="kategori" placeholder="Kategori"   aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0"  type="submit">Search</button>
          </form>    
        </li>
      </ul>            
  </div>
  </nav>
<!--!!!!!!!!!!!!!!!!!!!! akhir kode  !!!!!!!!!!!!!!!!!!!!!!!!--> 



<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Kode untuk menampilkan data buku dalam bentuk tabel !!!!!!!!!!!!!!!!!!-->  
  <br>  
  <?php  
  $count=0;
  $no=1; 
  if (!$buku) {
    echo "<br><br><center>".'BUKU TIDAK DITEMUKAN :('."</center>";
  }
  else {
    ?>
    <table  class="table table-borderless table-light" width="20">        
      <thead class="table-dark">    
        <th class="text-center">NO</th>
        <th class="text-center">Cover Buku</th>
        <th class="text-center">Judul</th>
        <th class="text-center">Penulis</th>
        <th class="text-center">Kategori</th>
        <th class="text-center">Stock</th>          
        <th class="text-center" >AKSI</th>              
      </thead>
      <?php      
      foreach ($buku as $item): ?>  
      <tr>
        <input type="hidden" id="judul" value="<?php echo isset($_COOKIE['judul'])? $_COOKIE['judul'] : "" ;?>"></input>
        <input type="hidden" id="penulis" value="<?php echo isset($_COOKIE['penulis'])? $_COOKIE['penulis'] : "";?>"></input>                                                  
        <input type="hidden" id="kategori" value="<?php echo isset($_COOKIE['kategori'])? $_COOKIE['kategori'] : "" ;?>"></input>                                                              
        <td class="text-center table-<?= ($count%2)== 0? "danger" : "info" ;?>" scope="row"><?php echo $no;?></td>  
        <td scope="row" class="text-center " style="background-color:#FFDEAD">
          <div class="center">
            <img  src="<?php echo base_url(); ?>assets/images/<?= ($no%2)== 0? "The-Book-of-Eli" : "The-Jungle-Book" ;?>-icon.png" class="img" alt="Responsive image">      
          </div>
        </td>                        
        <td style="display:none;"  class="text-center"><?php echo $item->id_buku;?></td>
        <td class="text-center table-<?= ($count%2)== 0? "danger" : "info" ;?>"><?php echo $item->judul;?></td>  
        <td class="text-center table-<?= ($count%2)== 0? "danger" : "info" ;?>"><?php echo $item->penulis;?></td>                        
        <td class="text-center table-<?= ($count%2)== 0? "danger" : "info" ;?>"><?php echo $item->kategori;?></td>                        
        <td class="text-center table-<?= ($count%2)== 0? "danger" : "info" ;?>"><?php echo $item->stock;?></td>                        
        <td class="text-center table-<?= ($count%2)== 0? "danger" : "info" ;?>">            
          <center>
            <button type="button" class="badge badge-secondary btn-sm btnpinjam " data-status="<?= isset($_COOKIE['status'])? $_COOKIE['status'] : "" ;?>" >Pinjam</button>           
          </center>
        </td>
      </tr>       
      <?php 
      $count++;
      $no++;
      endforeach; }?> 
      </table>    
  </div>
  </section>    
<!--!!!!!!!!!!!!!!!!!!!! akhir kode  !!!!!!!!!!!!!!!!!!!!!!!!--> 



  <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! About Us Section !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
  <footer class="footer text-center">
  <section class="portfolio bg-success" id="contact">   
    <div class="container ">      
      <h2 class="text-center text-uppercase text-white">About Us</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Anggota Kelompok<br>Nama : Amanda Rizky Rossitika <br>Nim : 185150700111016</p>
        </div>
        <div class="col-lg-4 mr-auto">          
          <p class="lead">Ketua Kelompok<br>Nama : Adithia Risma Rara Putri <br>Nim : 185150700111002</p>
        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">Anggota Kelompok<br>Nama : Juan Michel Hesekiel <br>Nim : 165150707111021</p>
        </div>
      </div>      
    </div>    
</section>
</footer>








