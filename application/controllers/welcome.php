<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
        parent::__construct();
        $this->load->library("session");
        $this->load->helper('url');
    }
	public function index()
	{

		//session
		$data['sess'] = $this->session->userdata("mysess_id");
		$data['user_info'] = $this->session->userdata("user_info");
		//session
		

        $sql = "SELECT *, DATE_FORMAT(event.event_datetime,'%d/%m/%Y %H:%i:%s') AS event_newdatetime FROM event ORDER BY event_id DESC LIMIT 5";
        $query = $this->db->query($sql);
        
        $sql2 = "SELECT * FROM whojoinevent ORDER BY eventid ASC";
        $querysql2 = $this->db->query($sql2);

        $data['query'] = $query->result();
        $data['querysql2'] = $querysql2->result_array();
        $data['numrows'] = $querysql2->num_rows();

        $this->load->view('welcome_message',$data);
	}
	public function aboutus(){

		//session
		$data['sess'] = $this->session->userdata("mysess_id");
		$data['user_info'] = $this->session->userdata("user_info");
		//session

		$this->load->view('aboutus',$data);
	}
	public function contactus(){

		//session
		$data['sess'] = $this->session->userdata("mysess_id");
		$data['user_info'] = $this->session->userdata("user_info");
		//session

		$this->load->view('contactus',$data);
	}
	public function login(){
		$this->load->view('signin');
	}
	public function gotoregisterpage(){
		$this->load->view('adduser');
	}
	public function adduser(){

		if($this->input->post("btsave")!=null){
			$username = $this->input->post("username");
			$ar = array(
			"username"=>$this->input->post("username"),
			"password"=>$this->input->post("password"),
			"user_status"=>$this->input->post("user_status")
			);
			//check duplicate record
		$query = $this->db->select('*')->from('user')->where( 'username',$username )->get();
		//check duplicate record
		if($query->num_rows() > 0){
			$data['query']=$query;
			$data['wrong']="ชื่อผู้ใช้ นี้ถูกลงทะเบียนแล้ว กรุณาลองใหม่";
			$this->load->view("adduser",$data);
		} else if($query->num_rows() == 0){
			$this->db->insert("user",$ar);
			$this->load->view("registeralready");
		}
			
			
			//exit();
		}
		//$this->load->view("welcome/login");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */