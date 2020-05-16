 
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


<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Manage Buku Section !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
 <section class="portfolio" id="booklist"> 
  <div class="container">     


  <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Kode untuk menampilkan button tambah buku dan info ROLE dari user !!!!!!!!!!!!!!!!!!-->    
 <form action="<?php echo base_url('buku/logout'); ?>" method="post">
  <br>  
  <div class="form-row">    
    <div class="form-group col-md-6">      
      <h2 >Manage Buku</h2>   
    </center>
    </div>
    <div class="form-group col-md-4">     
    </div>    
    <div class="form-group col-md-2">
      <label ><?php echo "ROLE : ".$_SESSION['role'] ?> |</label>           
    </div>    
  </div>
</form>
<form action="<?php echo base_url('buku/create_buku'); ?>" method="post">
 <div class="form-group">
  <div class="form-check">
    <button type="submit" class="btn btn-success btn-sm">Tambah Buku</button>         
    <br>      
  </div>
</div>
</form>
<!--!!!!!!!!!!!!!!!!!!!! akhir kode  !!!!!!!!!!!!!!!!!!!!!!!!--> 




<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Kode untuk menampilkan data buku dalam bentuk tabel !!!!!!!!!!!!!!!!!!--> 
<table border="3" class="table table-light" width="20">  
<caption>Daftar Buku</caption>   
  <thead  border="3"  >    
    <th class="text-center">ID</th>
    <th class="text-center">Judul</th>
    <th class="text-center">Penulis</th>
    <th class="text-center">Kategori</th>
    <th class="text-center">Stock</th>          
    <th class="text-center" >AKSI</th>              
  </thead>
  <?php   
  $count=1;
  foreach ($buku as $item):  ?>        
  <tr >            
    <td class="text-center table-<?= ($count%2)== 0? "warning" : "info" ;?>" scope="row"><?php echo $item->id_buku;?></td>                        
    <td class="text-center table-<?= ($count%2)== 0? "warning" : "info" ;?>"><?php echo $item->judul;?></td>
    <td class="text-center table-<?= ($count%2)== 0? "warning" : "info" ;?>"><?php echo $item->penulis;?></td>                        
    <td class="text-center table-<?= ($count%2)== 0? "warning" : "info" ;?>"><?php echo $item->kategori;?></td>                        
    <td class="text-center table-<?= ($count%2)== 0? "warning" : "info" ;?>"><?php echo $item->stock;?></td>                        
    <td class="text-center table-<?= ($count%2)== 0? "warning" : "info" ;?>">            
      <center>
      <button type="button" class="badge badge-secondary btn-sm editbtn ">Edit</button>
      <a>|</a>
      <a href="<?php echo base_url('buku/del_buku/' . $item->id_buku); ?>" class="badge badge-danger delbtn" onclick="return checkDel()"> Delete</a>            
    </center>
    </td>
  </tr>        
  <?php  
  $count++;         
  endforeach; ?>  
</table>  
</div>
</section>
<!--!!!!!!!!!!!!!!!!!!!! akhir kode  !!!!!!!!!!!!!!!!!!!!!!!!--> 

 <!-- About Us Section -->
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



