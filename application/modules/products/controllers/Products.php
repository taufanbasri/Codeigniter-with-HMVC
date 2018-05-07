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

  function edit($id) {
  	$flag = ['id' => $id];

	$product = $this->product_model->edit($flag)->row();

	echo json_encode($product);
  }

  function update() {
  	$flag = ['id' => $this->input->post('id_edit')];
	$data = [
		'code' => $this->input->post('code_edit'),
		'name' => $this->input->post('name_edit'),
	];

	$this->product_model->update($flag, $data);
  }

}
