<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Categories extends CI_Controller {
	public function __construct(){

		parent::__construct();
		$this->secure->loginCheck();


	}
	
	public function index(){

		$this->load->view("admin/products/categories");

	}
	
	public function createCategory(){
		
		$this->load->view("admin/products/create-category");
		
	}
	
	public function createsubCategory(){
		
		$this->load->view("products/categories/createsubcategory");
		
	}

	public function subCategories($id){
	
		$data["scat"] = $this->db->get_where("tbl_sub_categories",array("category_name"=>$id))->result();
		$this->load->view("products/categories/subcategories",$data);

	}
	
	public function editCategory($id){

		$data["cat"] = $this->db->get_where("tbl_categories",array("id"=>$id))->row();
		$this->load->view("admin/products/create-category",$data);

	}
	
	public function editsubCategory($cid,$id){
		
		$this->load->view("products/categories/createsubcategory");

	}
	
	public function insertCategory(){

		$id = $this->input->post("id");
		$cname = $this->input->post("cat_name");

		if($id){
			$this->db->where("id !=",$id);
		}
		$cchk = $this->db->get_where("tbl_categories",array("category_name"=>$cname))->num_rows();

		$url = $id ? "editCategory" : "createCategory";

		if($cchk == 1){

			$this->alert->pnotify("error","Category Already Exists","error");
			redirect("admin/products/categories/$url/".$id);

		}

		if($_FILES['cat_img']['size']!='0'){

			$config['upload_path']          = 'uploads/categories/';
			$config['allowed_types']        = 'png|jpg|jpeg';
			$config['encrypt_name']             = TRUE;
//			$config['overwrite'] = TRUE;

			$this->load->library("upload", $config);
			$this->upload->do_upload("cat_img");

			$d=$this->upload->data();

			$pr_image='uploads/categories/'.$d['file_name'];


		}else{

			$da = $this->db->get_where("tbl_categories",array("id"=>$id,"deleted"=>0))->row();
			$pr_image = $da->image;

		}
		
		$link = str_replace(" ","-",strtolower($cname));
		$data = array("category_name" => $cname, "image" => $pr_image,"link"=>$link, "created_date" => date("Y-m-d H:i:s"));

		if($id){
			$c = $this->db->where("id",$id)->update("tbl_categories",$data);
		}else{
			$c = $this->db->insert("tbl_categories",$data);
		}

		$status = $id ? "Updated" : "Created";

		if($c){

			$this->alert->pnotify("success","Category $status Successfully","success");
			redirect("admin/products/categories/$url/".$id);

		}else{

			$this->alert->pnotify("error","Error Occured Please Try Again","error");
			redirect("admin/products/categories/$url/".$id);
		}


	}	

	public function delCat($id){

		$c = $this->db->delete("tbl_categories",array("id"=>$id));

		if($c){

				$this->alert->pnotify("success","Category deleted Successfully","success");
				redirect("admin/products/categories");

		}else{

				$this->alert->pnotify("error","Error Occured Please Try Again","error");
				redirect("admin/products/categories");
		}
	}	

	public function insertsubCategory(){

		$cname = $this->input->post("cat_name");
		$scname = $this->input->post("scat_name");
		$bname = $this->input->post("brand");

		$config['upload_path']          = 'uploads/categories/';
		$config['allowed_types']        = 'jpg|jpeg|png';
	//    $config['encrypt_name']             = TRUE;
		$config['overwrite'] = TRUE;


		$this->load->library('upload', $config);

		$this->upload->do_upload("cat_img");

		$d=$this->upload->data();

		$pr_image='uploads/categories/'.$d['file_name'];

		$link = str_replace(" ","-",strtolower($scname));

		$data = array("category_name" => $cname,"sub_cat_name"=>$scname ,"image" => $pr_image,"short_desc"=>$bname,"link" => $link, "created_date" => date("Y-m-d H:i:s"));

		$c = $this->db->insert("tbl_sub_categories",$data);
		
		if($c){

				$this->alert->pnotify("success","Sub Category Created Successfully","success");
				redirect("products/subCategories/".$cname);

		}else{

				$this->alert->pnotify("error","Error Occured Please Try Again","error");
				redirect("products/subCategories/".$cname);
		}


	}


	public function updatesubCategory(){

		$id = $this->input->post("scid");
		$cname = $this->input->post("cat_name");
		$scname = $this->input->post("scat_name");
		$bname = $this->input->post("brand");

		$da = $this->db->get_where("tbl_sub_categories",array("id"=>$id,"deleted"=>0))->row();



		if($_FILES['cat_img']['size']!='0'){


			$config['upload_path']          = 'uploads/categories/';
			$config['allowed_types']        = 'png|jpg|jpeg';
			//    $config['encrypt_name']             = TRUE;
			$config['overwrite'] = TRUE;

			$this->load->library("upload", $config);
			$this->upload->do_upload("cat_img");

			$d=$this->upload->data();

			$pr_image='uploads/categories/'.$d['file_name'];


		}else{

			$pr_image = $da->image;

		}

		$link = str_replace(" ","-",strtolower($scname));
		
		$data = array("category_name" => $cname,"sub_cat_name"=>$scname,"link" => $link,"short_desc"=>$bname,"image"=>$pr_image);

		 $this->db->set($data);
		 $this->db->where("id",$id);
		 $c = $this->db->update("tbl_sub_categories");

		if($c){

				$this->alert->pnotify("success","Sub Category Updated Successfully","success");
				redirect("products/subCategories/".$cname);

		}else{

				$this->alert->pnotify("error","Error Occured Please Try Again","error");
				redirect("products/subCategories/".$cname);
		}


	}	


	public function delsubCat($cid,$id){

		$c = $this->db->delete("tbl_sub_categories",array("id"=>$id));

		if($c){

				$this->alert->pnotify("success","Sub Category deleted Successfully","success");
				redirect("products/subCategories/".$cid);

		}else{

				$this->alert->pnotify("error","Error Occured Please Try Again","error");
				redirect("products/subCategories/".$cid);
		}
	}	

	




}
