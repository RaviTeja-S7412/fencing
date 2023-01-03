<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index(){
		$cid = $this->input->get("cid");
		$data['cdata'] = $this->db->get_where("tbl_categories",["id"=>$cid])->row();
		$data['products'] = $this->db->get_where("tbl_products",["product_category"=>$cid])->result();
		$this->load->view('products',$data);
	}

	public function view($id){
		$data['pdata'] = $this->db->get_where("tbl_products",["link"=>$id])->row();
		$this->load->view('product-view',$data);
	}

}
