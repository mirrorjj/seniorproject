<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

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

	}
	public function signin(){
		
		$query = $this->db->query("SELECT * FROM user WHERE username='".$this->input->post('username')."' AND password='".$this->input->post('password')."'");	
		//$result = $query->result();

		//$data['user_info'] = $query->result_array();

		if($query->num_rows() > 0){
			$ar=array(
					"mysess_id"=>$this->input->post("username"),
					"user_info"=>$query->result_array()
				);
			$this->session->set_userdata($ar);
		}
		if($this->session->userdata("mysess_id")==null){
			$data['query']=$result;
			$data['wrong']="คุณกรอก username หรือ password ผิดกรุณาลองใหม่";
			$this->load->view("signin",$data);
			//redirect("welcome/login","refresh");
		} else {
			$data['sess'] = $this->session->userdata("mysess_id");
			$data['user_info'] = $this->session->userdata("user_info");

			//show last 5 event
			$sql = "SELECT *, DATE_FORMAT(event.event_datetime,'%d/%m/%Y %H:%i:%s') AS event_newdatetime FROM event ORDER BY event_id DESC LIMIT 5";
	        $query = $this->db->query($sql);
	        
	        $data['query'] = $query->result();
	        //show last 5 event

		}
		$this->load->view("welcome_message",$data);
	}
	public function signout(){
		$ar=array(
					"mysess_id"=>"",
					"user_info"=>""
				);
		$this->session->unset_userdata($ar);
		$this->session->sess_destroy();
		redirect("welcome/index","refresh");
		exit();
	}
	public function addevent(){

		//session
		$data['sess'] = $this->session->userdata("mysess_id");
		$data['user_info'] = $this->session->userdata("user_info");
		//session

		if($this->input->post("btsave")!=null){
			$ar = array(
			"event_picture"=>$this->input->post("event_picture"),
			"event_name"=>$this->input->post("event_name"),
			"event_datetime"=>$this->input->post("event_datetime"),
			"event_where"=>$this->input->post("event_where"),
			"event_detail"=>$this->input->post("event_detail"),
			"event_who_create"=>$this->input->post("event_who_create")
			);
			$this->db->insert("event",$ar);
			redirect("user/manageevent","refresh");
			exit();
		}
		$this->load->view("addevent",$data);
	}
	public function editevent($id){

		//session
		$data['sess'] = $this->session->userdata("mysess_id");
		$data['user_info'] = $this->session->userdata("user_info");
		//session
		
		if($this->input->post("btsave")!=null){
			$ar = array(
			"event_picture"=>$this->input->post("event_picture"),
			"event_name"=>$this->input->post("event_name"),
			"event_datetime"=>$this->input->post("event_datetime"),
			"event_where"=>$this->input->post("event_where"),
			"event_detail"=>$this->input->post("event_detail")
			);
			$this->db->where("event_id", $id);
			$this->db->update("event",$ar);
			redirect("user/manageevent","refresh");
			exit();
		}
		
		$sql = " SELECT * FROM event where event_id ='$id' ";
		$rs = $this->db->query($sql);
		if($rs->num_rows() == 0){
			$data['rs']=array();
		} else {
			$data['rs']=$rs->row_array();
		}
		$this->load->view("editevent",$data);
	}
	public function deleteevent($id){
		$this->db->delete('event', array('event_id' => $id));
		redirect("user/manageevent","refresh");
		exit();
	}
	public function manageevent(){

		//session
		$data['sess'] = $this->session->userdata("mysess_id");
		$data['user_info'] = $this->session->userdata("user_info");
		//session

		$sql = "SELECT *, DATE_FORMAT(event.event_datetime,'%d/%m/%Y %H:%i:%s') AS event_newdatetime FROM event WHERE event_who_create='$data[sess]' ORDER BY event_id ASC";
		$rs = $this->db->query($sql);
		
		$data['rs'] = $rs->result_array();


		$this->load->view('manageevent',$data);
	}
	public function subscribetoprivileged(){

		//session
		$data['sess'] = $this->session->userdata("mysess_id");
		$data['user_info'] = $this->session->userdata("user_info");
		//session

		if($this->input->post("btsave")!=null){
			$ar = array(
			"identification_picture"=>$this->input->post("identification_picture"),
			"who"=>$this->input->post("who_subscribe")
			);
			$this->db->insert("subscribetoprivileged",$ar);
			$this->load->view("subscribecomplete",$data);
			//exit();
		}
		$this->load->view("subscribetoprivileged",$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */