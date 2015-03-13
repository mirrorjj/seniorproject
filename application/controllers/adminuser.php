<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminuser extends CI_Controller {

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
	public function manageuser(){

		//session
		$data['sess'] = $this->session->userdata("mysess_id");
		$data['user_info'] = $this->session->userdata("user_info");
		//session

		$sql = "SELECT * FROM subscribetoprivileged";
		$rs = $this->db->query($sql);
		
		$data['rs'] = $rs->result_array();


		$this->load->view('manageuser',$data);
	}
	public function confirmuser($who){

			$ar = array(
			"user_status"=>"privileged user"
			);
			$this->db->where("username", $who);
			$this->db->update("user",$ar);

			$this->db->delete('subscribetoprivileged', array('who' => $who));
			redirect("adminuser/manageuser","refresh");
			exit();

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */