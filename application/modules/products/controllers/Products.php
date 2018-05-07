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
	  $data['datatables'] = $this->product_model->products();

	  $this->load->view('template', $data);
  }

}
