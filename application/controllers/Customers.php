<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function __construct(){

		parent::__construct();
  	
	 }

	public function index(){
		
		$email = $this->input->post('email');
		$cpass = $this->input->post('cpass');
		
		$eChk = $this->db->get_where("tbl_users",array("email"=>$email,"deleted"=>0))->num_rows();
		
		if($eChk > 0){
			
			echo json_encode(array("status"=>"err","msg"=>'Email already registered'));
			exit();
			
		}
		
		$data = array(
			
			"email" => $email,
			"password" => $this->secure->encrypt($cpass),
			"created_date" => date('d-m-Y H:i:s')
			
		);
		
		$d = $this->db->insert("tbl_users",$data);
		$lid = $this->db->insert_id();
		
		if($d){
			
			echo json_encode(array("status"=>"success","msg"=>'Successfully registered'));
			$this->session->set_userdata(array("user_id"=>$lid,"user_email"=>$email));
			exit();
			
		}else{
			
			echo json_encode(array("status"=>"err","msg"=>'Error occured'));
			exit();
			
		}
		
	}


	public function updateaccountdetails(){
		$uid = $this->input->post('uid');
		$name = $this->input->post('fname');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$address = $this->input->post('shipping_address');

		$data = array(
        'username' => $name,
        'mobile' => $mobile,
        'address' => $address
		);

		$upu = $this->db->update('tbl_users', $data, array('id' => $uid));
		if($upu){
			
			echo json_encode(array("status"=>"success","msg"=>'Successfully Updated'));
			exit();
			
		}else{
			
			echo json_encode(array("status"=>"err","msg"=>'Error occured'));
			exit();
			
		}

	}

	public function updatepassword(){
		$uid = $this->input->post('uid');
		$opass = $this->input->post('opass');
		$npass = $this->input->post('npass');
		$cpass = $this->input->post('cpass');

		$epass = $this->db->get_where("tbl_users",array("id"=>$uid))->row()->password;

		if($this->secure->decrypt($epass) != $opass){
			echo json_encode(array("status"=>"err","msg"=>'You entered old password was wrong. Please enter correct password.'));
			exit();
		}

		if($npass != $cpass){
			
			echo json_encode(array("status"=>"err","msg"=>'New password and confirm password not matched.'));
			exit();
			
		}

		$data = array(
        'password' => $this->secure->encrypt($npass)
		);

		$upu = $this->db->update('tbl_users', $data, array('id' => $uid));
		if($upu){
			
			echo json_encode(array("status"=>"success","msg"=>'Successfully Changed Password'));
			exit();
			
		}else{
			
			echo json_encode(array("status"=>"err","msg"=>'Error occured'));
			exit();
			
		}

	}
	
	public function do_login(){
     
		$email = $this->input->post("email");
		$password = $this->input->post("pass");
		
		$eChk = $this->db->get_where("tbl_users",array("email"=>$email,"deleted"=>0))->num_rows();
		
		if($eChk == 1){
			
			$d = $this->db->get_where("tbl_users",array("email"=>$email,"deleted"=>0))->row();
			$exPass = $this->secure->decrypt($d->password);
			
			if($password == $exPass){
				
				$this->session->set_userdata(array("user_id"=>$d->id,"user_email"=>$d->email));
				echo json_encode(array("status"=>"success","msg"=>'successfully logged in.'));
				exit();
				
			}else{
				
				echo json_encode(array("status"=>"err","msg"=>'Incorrect Password'));
				exit();
				
			}
			
		}else{
			
			echo json_encode(array("status"=>"err","msg"=>'Email not registered with us.'));
			exit();
		}
		
	}
	
	public function logout(){
		
		$this->session->unset_userdata("user_id");
		$this->session->unset_userdata("user_email");
		redirect();
		
	}

	public function accountdetails(){
		$userid = $this->session->userdata('user_id');
		$user_email = $this->session->userdata('user_email');
		$data['customerinfo'] = $this->db->get_where("tbl_users",array("id"=>$this->session->userdata("user_id")))->row();
		$this->load->view("front/accountdetails",$data);
	}

	public function changepassword(){
		
		$this->load->view("front/changepassword");
	}

	public function dashboard(){
		$userid = $this->session->userdata('user_id');
		$user_email = $this->session->userdata('user_email');
		$data['customername'] = $this->customer->get_customerNamebyId($userid);
		$this->load->view("front/dashboard",$data);
	}

	public function orderhistory(){
		$userid = $this->session->userdata('user_id');
		$data['orderproducts'] = $this->customer->get_orderhistory($userid);
		$this->load->view("front/orderhistory",$data);
	}

	public function wishlist(){
		$userid = $this->session->userdata('user_id');
		$data['wishlistproducts'] = $this->customer->get_wishlistProducts($userid);
		$this->load->view("front/wishlist",$data);
	}

	
	function add_to_wishlist(){ 
		$customer_id = $this->input->post('customer_id');
		$product_id = $this->input->post('product_id');
		
		$wChk = $this->db->get_where("tbl_wishlist",array("userid"=>$customer_id,"productid"=>$product_id))->num_rows();
				
		if($wChk > 0){
			
			exit();
			
		}
		
		$data = array(
			
			'userid' => $customer_id, 
            'productid' => $product_id, 
			
		);
		
		$d = $this->db->insert("tbl_wishlist",$data);
		
		if($d){
			$wlistarr = $this->customer->get_wishlistProducts($customer_id);
			echo json_encode(array("status"=>"success","msg"=>'<i class="fa fa-heart"></i> Added to Wishlist',"wishlistCount"=>count($wlistarr)));
			exit();
			
		}else{
			
			echo json_encode(array("status"=>"err","msg"=>'Error occured'));
			exit();
			
		}

        
    }

    function remove_wishlist(){ 
		$customer_id = $this->input->post('customer_id');
		$product_id = $this->input->post('product_id');
		
		$wrp = $this->db->delete('tbl_wishlist', array("userid"=>$customer_id,"productid"=>$product_id)); 

		if($wrp){
			$wlistarr = $this->customer->get_wishlistProducts($customer_id);
			echo json_encode(array("status"=>"success","msg"=>' Removed from Wishlist',"wishlistCount"=>count($wlistarr)));
			exit();
			
		}
				
		
		        
    }
}