<?php

class Buku_model extends CI_Model {

  private $id; 
  private $judul; 
  private $penulis;
  private $kategori;
  private $stock;
  private $username;
  private $password;
  private $role;
  
  
  public function isLogin() {   

    $this->load->database();     
    
   //session_start();
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $rs = $this->db->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");

    $rows['user'] = $rs->result();  
    
    if ($rs->num_rows() > 0) {                 
        if ($rows['user'][0]->role == 1) {
          $_SESSION['username'] = $rows['user'][0]->username; 
          $_SESSION['role'] =  "USER";     
        } 
        else {      

          $_SESSION['role'] =  "ADMIN";                  

        }
   }        
    else {
    $_SESSION['role']="null";
   }
}

public function insert_user() {

   $this->load->database();
   
   $username = $_POST['uname'];
   $password = $_POST['pass'];
   $role = 1;

   $data = array( 
    'username'  =>  $username,        
    'password'  =>  $password,
    'role'      =>  $role
    );

   $this->db->insert('user', $data);
}


public function insert_buku() {

  $id = "";
  $judul = $_POST['judul'];
  $penulis = $_POST['penulis'];
  $kategori = $_POST['kategori'];
  $stock = $_POST['stock'];  

  $this->load->database();
  
  $data = array( 
    'id_buku'  =>  $id,        
    'judul'    =>  $judul, 
    'penulis'  =>  $penulis,         
    'kategori' =>  $kategori,         
    'stock'    =>  $stock
    );

  $this->db->insert('buku', $data);

  //$rs = $this->con->query("INSERT INTO surat (nama_pengirim, nama_penerima, perihal, lampiran, jenis_surat, tanggal, attachment, status) VALUES ('$namaPengirim','$namaPenerima', '$perihal', '$lampiran', '$jenisSurat', '$tanggal', '$attachment', '$status')");

}

public function getAll() { 

  $this->load->database();
  
  $query = $this->db->get('buku');    

  return $query->result();
  
}

public function getBuku($id) {        

  $this->load->database();
  
  $query = $this->db->get_where('buku',array('id_buku' => $id));       

  return $query->result();
  
}

public function getByKategori() {

  $this->load->database();

  $kategori = $_POST['kategori'];

  $query = $this->db->query("SELECT * FROM buku WHERE kategori LIKE '%$kategori%' ");

  if ($query->num_rows()<1) {          

      return null;
  }

  return $query->result();
}

public function update_buku() {

  $this->load->database();
  
  $id =    $_POST['id'];
  $judul = $_POST['judul'];
  $penulis = $_POST['penulis'];
  $kategori = $_POST['kategori'];
  $stock = $_POST['stock']; 

  $data = array( 
    'id_buku'  =>  $id,        
    'judul'    =>  $judul, 
    'penulis'  =>  $penulis,         
    'kategori' =>  $kategori,         
    'stock'    =>  $stock
    );

  $this->db->where('id_buku',$id);
  $this->db->update('buku', $data);

  //$rs = $this->con->query("UPDATE surat SET nama_pengirim='$namaPengirim',nama_penerima='$namaPenerima', perihal='$perihal', lampiran='$lampiran', jenis_surat='$jenisSurat', tanggal='$tanggal', attachment='$attachment', status='$status' WHERE id='$id' )");

  
}

public function del_buku($id) {

  $this->load->database();

  $this->db->delete('buku', array('id_buku' => $id));     

    //$rs = $this->con->query("DELETE FROM surat WHERE id = '$data'");
}

public function update_stok($pinjam=null) {
  $this->load->database();

  $a = 1;

  if ($pinjam) {
    $a = -1;
    $id = $_POST['id'];
    $stock= $_POST['stok'];          
  }
  else {
    $id = $_COOKIE['id'];
    $stock = $_COOKIE['stok'];    
  }

  $stock += ($a);
  setcookie("stok",$stock,time() + 3600);  

  $data = array( 
      'id_buku'  =>  $id,                    
      'stock'    =>  $stock
      );

    $this->db->where('id_buku',$id);
    $this->db->update('buku', $data);

    // var_dump($id);
    // echo "\n";  
    // var_dump($stock);

}


} 