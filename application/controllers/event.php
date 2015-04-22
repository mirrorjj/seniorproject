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
    public function __construct(){
        parent::__construct();
        $this->load->library("session");
        $this->load->helper('url');
    }
    public function index()
    {

    }
    // public function viewevent(){
    //     $this->load->view('viewevent');
    // }
    public function searchevent(){

        //session
        $data['sess'] = $this->session->userdata("mysess_id");
        $data['user_info'] = $this->session->userdata("user_info");
        //session


        //pagination
        $this->load->library("pagination");

        $config['base_url']=base_url("event/searchevent");
        $config['per_page']=5;
        $config['total_rows']=$this->db->count_all("event");

        $config['full_tag_open']="<div class='pagination'>";
        $config['full_tag_close']="</div>";

        $this->pagination->initialize($config);
        //pagination
        

        if($this->input->post("btsave")!=null){

            $match = $this->input->post('event_search');
            // $this->db->like('event_name',$match);
            // $this->db->or_like('event_where',$match);
            // $this->db->or_like('event_detail',$match);
            // $query = $this->db->get('event');

            //check number who join event
            // $sqlno = "SELECT * FROM whojoinevent";

            // $queryno = $this->db->query($sqlno);

            // if($query->num_rows() == 0){
            //     $data['queryno'] = array();
            // } else {
            //     $data['queryno'] = $queryno->result_array();
            // }
            //check number who join event

            $sql = "SELECT *, DATE_FORMAT(event.event_datetime,'%d/%m/%Y %H:%i:%s') AS event_newdatetime FROM event 
                    WHERE event_name LIKE '%$match%' OR event_where LIKE '%$match%' OR event_detail LIKE '%$match%'";

            $query = $this->db->query($sql);        

            $sql2 = "SELECT * FROM whojoinevent ORDER BY eventid ASC";
            $querysql2 = $this->db->query($sql2);


            if($query->num_rows() == 0){
                $data['query'] = array();
            } else {
                //$data['query']=$query->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
                $data['query'] = $query->result_array();
                $data['querysql2'] = $querysql2->result_array();
                $data['numrows'] = $querysql2->num_rows();
            }


            //$data['query'] = $this->db->select("event_id,event_name,event_datetime,event_where,event_detail,event_who_create,event_picture")->from("event")->like("event_name",$match)->or_like("event_where",$match)->or_like("event_detail",$match)->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
        }

        $this->load->view("searcheventresult", $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */