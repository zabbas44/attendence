<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sadmin extends CI_Controller {

        public function __construct() {
         parent::__construct();
          
        }
        
	public function index()
	{   
            $this->load->view('sadmin/base');
	}
        public function crud()
        {

            $this->load->model('user_m');
            $data['results']=$this->user_m->getall();
            $this->load->view('sadmin/base',$data);
            
           
        }
        public function add_user()
        {
            $this->load->model('user_m');
            $data = array(
                            'u_name' => $this->input->post('name'),
                            'u_designation' => $this->input->post('desig'),
                            'u_joindate' => $this->input->post('jdate')
                            );
            

            
            // Transfering Data To Model
            $this->user_m->insert($data);
            // Loading View
           
            $this->load->view('sadmin/base');
        }
        public function view_log()
        {   
            $this->load->model('user_m');
            $data['results']=$this->user_m->getall();
            $this->load->view('sadmin/base',$data);
        }
        public function password_changed()
        {
            $this->load->view('sadmin/base');
        }
        public function reset_password()
        {
            $this->load->view('sadmin/base');
        }

       
//        function deletevalues( )
//       {
//           $this->load->model("get_db");
//           $oldrow = array(
//               "u_id" => "2"
//           );
//                   $this->get_db->delete($oldrow);
//                   echo"deleted";
//       }

        
}





/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */