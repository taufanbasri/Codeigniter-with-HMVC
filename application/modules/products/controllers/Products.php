<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

	$this->load->model('product_model');
  }

  function index()
  {
	  $data['title'] = 'Data Produk';
	  $data['content'] = 'index';
	  $data['scripts'] = 'scripts';
	  $data['datatables'] = $this->product_model->all();

	  $this->load->view('template', $data);
  }

  function store()
  {
  	$data = [
		'code' => $this->input->post('code'),
		'name' => $this->input->post('name'),
		'quantity' => 0
	];

	$this->product_model->store($data);
  }

}
