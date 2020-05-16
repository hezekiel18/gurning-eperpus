<ul class="list-unstyled list" >
    <div class="center">
    <li class="media mt-5 ">          
      <img src="<?php echo base_url(); ?>assets/images/<?= ($no%2)== 0? "reindeer-deer" : "gorilla" ;?>-icon.png" class="img-thumbnail" alt="Responsive image">      
      <div class="media-body">
        <div class="center">
          <h4 class="mt-0 mb-1">                          
            <input type="hidden" id="judul-<?= $count;?>" value="<?php echo isset($_COOKIE['judul'])? $_COOKIE['judul'] : "" ;?>"></input>
            <input type="hidden" id="penulis-<?= $count;?>" value="<?php echo isset($_COOKIE['penulis'])? $_COOKIE['penulis'] : "";?>"></input>                                                  
            <input type="hidden" id="kategori-<?= $count;?>" value="<?php echo isset($_COOKIE['kategori'])? $_COOKIE['kategori'] : "" ;?>"></input>                                                  
            <a  type="button"  class="btnpinjam-<?= $count;?>" 
              data-status="<?= isset($_COOKIE['status'])? $_COOKIE['status'] : "" ;?>" 
              data-id="<?php echo $item->id_buku;?>"
              data-judul="<?php echo $item->judul;?>"
              data-penulis="<?php echo $item->penulis;?>"
              data-kategori="<?php echo $item->kategori;?>"
              data-stok="<?php echo $item->stock;?>"
              >
              <?php echo $no.". Judul : ".$item->judul;?>
            </a>
          </h4>      
        </div>
      <div class="center">
      <h6><?php echo "Penulis : ".$item->penulis;?></h6> 
      <h6><?php echo "Kategori : ".$item->kategori;?></h6>    
      <h6><?php echo "Stok : ".$item->stock;?></h6>            
      </div>        
    </div>
   </li>  
   </div> 
  </ul >   