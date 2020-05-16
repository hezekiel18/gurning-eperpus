<?php

class Blog_model extends CI_Model {

  public function get_posts() {
    $this->load->database();
     
    $query = $this->db->get('post');
    
    // $query = $this->db->query('SELECT * FROM post');
    
     return $query->result();      
    
  }

   public function get_post($id) {
    $this->load->database();    

    $query = $this->db->get_where('post', array('id' => $id));

    //$query = $this->db->query("SELECT * FROM post WHERE id = $id");

   	return $query->result(); 
  }

  public function insert_post($judul, $konten) {
    $this->load->database();
    
    $data = array( 
        'title'   =>  $judul, 
        'content' =>  $konten         
    );

    $this->db->insert('post', $data);

    //$this->db->query("INSERT INTO post (title, content) VALUES ('$judul', '$konten')");
}

public function update_post($id, $judul, $konten) {
    $this->load->database();
    
    $data = array( 
        'title'   =>  $judul, 
        'content' =>  $konten         
    );

    $this->db->where('id', $id);
    $this->db->update('post', $data);

    //$this->db->query("UPDATE post SET title = '$judul', content = '$konten' WHERE id = $id ");
}

  public function delete_post($id) {
    $this->load->database();

     $this->db->delete('post', array('id' => $id)); 

    //$this->db->query("DELETE FROM post WHERE id = $id");   
  }


}
