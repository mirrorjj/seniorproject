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
	public function index()
	{
        $sql = "SELECT *, DATE_FORMAT(event.event_datetime,'%d/%m/%Y %H:%i:%s') AS event_newdatetime FROM event ORDER BY event_id DESC LIMIT 5";
        $query = $this->db->query($sql);
        
        $data['query'] = $query->result();

        $this->load->view('welcome_message',$data);
	}
	public function aboutus(){
		$this->load->view('aboutus');
	}
	public function contactus(){
		$this->load->view('contactus');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */