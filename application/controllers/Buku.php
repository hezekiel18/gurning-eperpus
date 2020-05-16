<?php
session_start();
class Buku extends CI_Controller {

  private $model;

  public function __construct(){

   parent::__construct();     
   $this->load->model('Buku_model');

 }

 public function index($data=null) {  

   $this->load->view('perpus/v_login',$data);
 }

 public function register() {
  $this->load->view('perpus/v_register');
 }

 public function register_proses() {
  $this->Buku_model->insert_user();  
  $this->index();
 }

 public function cekLogin() {          
   $this->Buku_model->isLogin();   
   if($_SESSION['role'] == "ADMIN"){

    $this->read_buku();       
  }
  elseif ($_SESSION['role'] == "USER") {
    
   $this->user_read();      
 }     
 else{
   $data = array( 
    'info'  =>  'salah'           
    );

  $this->index($data);
}

}

public function logout() {           
  //session_start();
  session_destroy();  
  redirect('http://localhost/ci/', 'refresh');
}

public function create_buku() {    
  if (!isset($_SESSION['role'])) {
    redirect('http://localhost/ci/', 'refresh');
} 
  else {   
  $this->load->view('perpus/header',['title' => 'Input Buku']);     	 		
  $this->load->view('perpus/v_inputBuku');              
  $this->load->view('perpus/footer');             	  	   	
}
}

public function create_proses() {   	  
  $this->Buku_model->insert_buku();
  $this->read_buku();
}

public function read_buku() { 
 if (!isset($_SESSION['role'])) {
    redirect('http://localhost/ci/', 'refresh');
} 
 else {  
 $_SESSION['role'] = "ADMIN";
 $buku = $this->Buku_model->getAll();   
 $data['buku'] = $buku; 
 $this->load->view('perpus/header',['title' => 'Manage Buku']);             
 $this->load->view('perpus/v_admin',$data);
 $this->load->view('perpus/v_modal');              
 $this->load->view('perpus/footer'); 
}

}

public function user_read() {  
 
 if (isset($_SESSION['role'])) {  
    $_SESSION['role'] = "USER";
    $buku = $this->Buku_model->getAll(); 
    $data['buku'] = $buku;  
    $this->load->view('perpus/header',['title' => 'List Buku']);             
    $this->load->view('perpus/v_user',$data);
    $this->load->view('perpus/v_modal');                         
    $this->load->view('perpus/footer');  
} 
 else {    
    redirect('http://localhost/ci/', 'refresh');
 }

}

public function upd_proses() {  
  //session_start();   
  $this->Buku_model->update_buku();    
  $this->read_buku();
}

public function del_buku($id) {
 //session_start(); 
 $this->Buku_model->del_buku($id);
 $this->read_buku();
}


public function pinjam_proses() {  
 //session_start(); 
 setcookie("status",$_POST['status'],time() + 3600);
 setcookie("id",$_POST['id'],time() + 3600);
 setcookie("judul",$_POST['judul'],time() + 3600);
 setcookie("penulis",$_POST['penulis'],time() + 3600);
 setcookie("kategori",$_POST['kategori'],time() + 3600);
 setcookie("stok",$_POST['stok'],time() + 3600);
 $pinjam = $_POST['status'];
 $this->Buku_model->update_stok($pinjam);  
 redirect('http://localhost/ci/buku/user_read/#booklist');  
}

public function kembali_proses() {  
 //session_start();  
 $this->Buku_model->update_stok();  
 setcookie("status","",time() - 3600);   
 setcookie("id","",time() - 3600);
 setcookie("judul","",time() - 3600);
 setcookie("penulis","",time() - 3600);
 setcookie("kategori","",time() - 3600);
 setcookie("stok","",time() - 3600);
 redirect('http://localhost/ci/buku/user_read/#booklist');
 
}

public function search_proses() {

if(isset($_POST['kategori']) ) {    
    $buku = $this->Buku_model->getByKategori();    
    $data['buku'] = $buku;  
    $this->load->view('perpus/header',['title' => 'List Buku']);             
    $this->load->view('perpus/v_user',$data);
    $this->load->view('perpus/v_modal');                         
    $this->load->view('perpus/footer');                    

  }   

}


}