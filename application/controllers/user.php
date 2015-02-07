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
	}
	public function index()
	{

	}
	public function addevent(){

		if($this->input->post("btsave")!=null){
			$ar = array(
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
		$this->load->view("addevent");
	}
	public function editevent($id){
		
		if($this->input->post("btsave")!=null){
			$ar = array(
			"event_name"=>$this->input->post("event_name"),
			"event_datetime"=>$this->input->post("event_datetime"),
			"event_where"=>$this->input->post("event_where"),
			"event_detail"=>$this->input->post("event_detail"),
			"event_who_create"=>$this->input->post("event_who_create")
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
		$sql = "SELECT *, DATE_FORMAT(event.event_datetime,'%d/%m/%Y %H:%i:%s') AS event_newdatetime FROM event ORDER BY event_id ASC";
		$rs = $this->db->query($sql);
		
		$data['rs'] = $rs->result_array();

		$this->load->view('manageevent',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */