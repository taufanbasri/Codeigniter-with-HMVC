<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function all()
  {
  	return $this->db->get('products');
  }

  public function store($data)
  {
  	return $this->db->insert('products', $data);
  }

}
