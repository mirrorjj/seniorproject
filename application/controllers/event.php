<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -  
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        //$this->load->view('viewevent');
    }
    public function viewevent(){
        $this->load->view('viewevent');
    }
    public function searchevent(){

        if($this->input->post("btsave")!=null){

            $match = $this->input->post('event_search');
            // $this->db->like('event_name',$match);
            // $this->db->or_like('event_where',$match);
            // $this->db->or_like('event_detail',$match);
            // $query = $this->db->get('event');

            $sql = "SELECT *, DATE_FORMAT(event.event_datetime,'%d/%m/%Y %H:%i:%s') AS event_newdatetime FROM event 
                    WHERE event_name LIKE '%$match%' OR event_where LIKE '%$match%' OR event_detail LIKE '%$match%'";

            $query = $this->db->query($sql);        


            if($query->num_rows() == 0){
                $data['query']= array();
            } else {
                $data['query']=$query->result();
            }

        }
        $this->load->view("searcheventresult", $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */