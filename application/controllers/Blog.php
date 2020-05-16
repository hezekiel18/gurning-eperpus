<?php

class Blog extends CI_Controller {

  public function index() {
  	$this->load->helper('url');
    $this->load->model('Blog_model');

    $posts = $this->Blog_model->get_posts();
    $data['posts'] = $posts;

    // print_r($data);
    // echo"<br>";
    // echo $data['posts'][1]->title;

    $this->load->view('read', $data);
  }


  public function update($id) {
    $this->load->helper('url');

    $this->load->model('Blog_model');

    $post = $this->Blog_model->get_post($id);
    $data['post'] = $post;
    //var_dump($data);

    $this->load->view('blog_update', $data);
  }

  public function update_process() {
  	$id = $this->input->post('id');
    $judul = $this->input->post('judul');
    $konten = $this->input->post('konten');

    $this->load->helper('url');
    $this->load->model('Blog_model');

    $this->Blog_model->update_post($id, $judul, $konten);
    //$this->read();
    redirect(base_url(), 'refresh');
  }

  public function create() {
    $this->load->helper('url');
    $this->load->view('blog_create');
  }


  public function create_process() {
    $judul = $this->input->post('judul');
    $konten = $this->input->post('konten');

    $this->load->helper('url');
    $this->load->model('Blog_model');

    $this->Blog_model->insert_post($judul, $konten);
    //$this->read();
    redirect(base_url(), 'refresh');
  }

    public function delete($id) {
    $this->load->helper('url');
    $this->load->model('Blog_model');

    $this->Blog_model->delete_post($id);
	 
	  //$this->read();
    redirect(base_url(), 'refresh');
  }


}
