<?php
defined("BASEPATH") OR exit("NO direct script access allow");
// require_once(APPPATH.'libraries/sendinblue/Mailin.php');

class Secure extends CI_Model{
	
	public function __construct(){
	
		parent::__construct();

	}

	
	public function loginCheck(){
		
		$id = $this->session->userdata("admin_id");

		$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";		
		$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$route = str_replace(base_url(),"",$url);			
							
		if($id){
			
			if($id == 1){
				
				
			}else{

				$rChk = $this->db->get_where("fdm_va_auths",array("deleted"=>0,"status"=>"Active","id"=>$id))->row()->role;
				$exRoles = $this->db->get_where("fdm_va_admin_role_access",array("role_id"=>$rChk))->row();

				$roles = isset($exRoles->modules) ? json_decode($exRoles->modules) : [];

				$mids = array();							   
				$submodules = array();			

				foreach($roles as $rm){

					$mids[] = $rm->module_id;
					$submodules[$rm->module_id] = $rm->sub_module_id;

				}

				$fRoutes = array();
				
				 $modules = $this->db->query("select * from fdm_va_modules where status=1 order by sort asc")->result();
				 foreach ($modules as $m) {

					 if(in_array($m->module_id,$mids)){
						 
						 $smodule = $this->db->get_where("fdm_va_sub_modules",array("module_id"=>$m->module_id))->result();
						 
						 if($smodule){ 
						 
							 $ssmids = isset($submodules[$m->module_id]) ? $submodules[$m->module_id] : [];
							
							foreach ($smodule as $sm) {

								if(in_array($sm->sub_module_id,$ssmids)){

									 $fRoutes[] = $sm->sub_module_link;
									
								}
							}
							$fRoutes[] = $m->module_link;
							 
						 }
					 }
				 }
				
				if(in_array($route,$fRoutes)){
					
					
				}else{
					
					$ex = explode("/",$route);
					
					$ex1 = isset($ex[1]) ? "/".$ex[1] : "";
					
					$exroute = $ex[0];
					
					if(in_array($exroute,$fRoutes)){
						
						
					}else{
						
						redirect('error-404');
						
					}
					
				}
				
				
			}
			
		}else{
			
			$msg = '<div class="alert alert-danger alert-dismissable"><button type = "button" class ="close" data-dismiss = "alert" aria-hidden = "true">&times;</button>Please Login To Access Admin</div>';	
			$this->session->set_flashdata("fmsg",$msg);
			redirect("admin/login");

			
		}
		
		
	}

	public function encrypt($data){
		
		$key="bjvd!@#$%^&*13248*/-/*vjvdf";
		$hmac_key = "kbdkh2365765243";


	$e = $this->encryption->initialize(
	array(
			'cipher' => 'blowfish',
			'mode' => 'cbc',
			'key' => $key,
			'hmac_digest' => 'sha256',
			'hmac_key' => $hmac_key
	)
	);
	
	$s=$this->encryption->encrypt($data);	
	
	
	if($s){
	
		return $s;		
		
	}else{
		
		return false;		
	
	}
}


public function encryptWithKey($data,$key){
	
	$this->encryption->initialize(
	array(
			'cipher' => 'aes-256',
			'mode' => 'ctr',
			'key' => $key
	)
	);
	
	$s=$this->encryption->encrypt($data);	
	
	
	if($s){
	
	return $s;		
		
	}else{
		
	return false;		
	
	}
}

public function decrypt($data){
	
		$key="bjvd!@#$%^&*13248*/-/*vjvdf";
		$hmac_key = "kbdkh2365765243";

	$d =$this->encryption->initialize(
	array(
			'cipher' => 'blowfish',
			'mode' => 'cdc',
			'key' => $key,
			'hmac_digest' => 'sha256',
			'hmac_key' => $hmac_key
	)
);
	$s=$this->encryption->decrypt($data);	
	if($s){
	
		return $s;		
		
	}else{
		
		return false;		
	
	}
}
	
	public function app_password_crypt( $string, $action ) {
		    $secret_key = '828569b50d33337c3fe5f45650fa7c21';
		    $secret_iv = 'cd187735dbfa1bf3a395ed52eaf82911';

		    $output = false;
		    $encrypt_method = "AES-256-CBC";
		    $key = hash( 'sha256', $secret_key );
		    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );

		    if( $action == 'e' ) {
		        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
		    }
		    else if( $action == 'd' ){
		        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
		    }

		    return $output;
	}
	
	public function agent(){
		if ($this->agent->is_browser())
			{
			        $data['agent'] = $this->agent->browser().' '.$this->agent->version();
			}
			elseif ($this->agent->is_robot())
			{
			       $data['agent'] = $this->agent->robot();
			}
			elseif ($this->agent->is_mobile())
			{
			       $data['agent'] = $this->agent->mobile();
			}
			else
			{
			       $data['agent'] = 'Unidentified User Agent';
			}

			$data['platform']= $this->agent->platform(); 
			$data['ip_address'] = $_SERVER['SERVER_ADDR'];
			
			return $data;
	}
	
	public function sms_otp($mobilenumbers,$message){
		
		$curl = curl_init();

		curl_setopt_array($curl, [
		  CURLOPT_URL => "https://api.sendinblue.com/v3/transactionalSMS/sms",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "{\"type\":\"transactional\",\"content\":\"$message\",\"tag\":\"accountValidation\",\"sender\":\"Rankers\",\"recipient\":\"91$mobilenumbers\"}",
		  CURLOPT_HTTPHEADER => [
			"Accept: application/json",
			"Content-Type: application/json",
			"api-key: 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"
		  ],
		]);

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
//		  return "cURL Error #:" . $err;
		} else {
//		  return $response;
		}
	}
	
	public function sms_trans($mobilenumbers,$message){
		
		$user="ranker_trans"; //your username
		$password="Castel494286"; //your password
//		$mobilenumber="7416232629"; //enter Mobile numbers comma seperated
//		$message = "test messgae"; //enter Your Message
		$senderid="IAEEDU"; //Your senderid
		$messagetype="N"; //Type Of Your Message
		$DReports="Y"; //Delivery Reports
		$url="http://www.smscountry.com/SMSCwebservice_Bulk.aspx";
		$message = urlencode($message);
		$ch = curl_init();
		if (!$ch){die("Couldn't initialize a cURL handle");}
		$ret = curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt ($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt ($ch, CURLOPT_POSTFIELDS,
		"User=$user&passwd=$password&mobilenumber=$mobilenumbers&message=$message&sid=$senderid&mtype=$messagetype&DR=$DReports");
		$ret = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		//If you are behind proxy then please uncomment below line and provide your proxy ip with port.
		// $ret = curl_setopt($ch, CURLOPT_PROXY, "PROXY IP ADDRESS:PORT");
		$curlresponse = curl_exec($ch); // execute
		if(curl_errno($ch))
//		echo 'curl error : '. curl_error($ch);
		if (empty($ret)) {
		// some kind of an error happened
		die(curl_error($ch));
		curl_close($ch); // close cURL handler
		} else {
		$info = curl_getinfo($ch);
		curl_close($ch); // close cURL handler
		return $curlresponse; //echo "Message Sent Succesfully" ;
		}
		
	}	
	
	public function send_email($email,$subject,$msg){
		
		$mailin = new Mailin('https://api.sendinblue.com/v2.0','7K1UgA5IMZr3qmYy');
		
			$data = array( "to" => array($email=>$email),
				"from" => array("info@iae.education","IAE"),
				"subject" => $subject,
				"html" => $msg

			);

		$s = $mailin->send_email($data);
//		var_dump($s);
		
	}
	
	public function generateOrderId(){
		
		$i='1';
		
		do{
			
			$id="ORD".random_string("numeric",7);
			
			$chk=$this->db->get_where("tbl_orders",array('order_id'=>$id))->num_rows();
			
			if($chk>0){
				$i='1';
				
			}else{
				$i='10';
			}
			
			
		}while($i<5);
		
		return $id;
	}
	
	public function pnotify($title="Title",$msg="",$type="success"){
		
		$this->session->set_flashdata("msg",$msg);
		$this->session->set_flashdata("type",$type);
		$this->session->set_flashdata("title",$title);
		
		return true;
		
	}
	
}