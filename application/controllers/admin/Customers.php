<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Customers extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->secure->loginCheck();
	}

	public function index()
	{

		$data["customers"] = $this->db->query("select * from tbl_users order by id desc")->result();
		$this->load->view("admin/customers", $data);
	}

}
