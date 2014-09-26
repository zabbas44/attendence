<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

        public function __construct() {
         parent::__construct();
          
        }
      
	public function index()
	{
            
           $this->load->view('user/base');
	}
        public function user_atten()
        {
           $this->load->model('user_m');
            $data = array(
                            'u_name' => $this->input->post('uname'),
                            'u_designation' => $this->input->post('desig'),
                            'u_cdate' => $this->input->post('cdate'),
                            'u_stime' => $this->input->post('stime'),
                            'u_etime' => $this->input->post('etime'),
                            'u_thours' => $this->input->post('thours')
                            );
            

            
            // Transfering Data To Model
            $this->user_m->insert($data);
            // Loading View
           
            $this->load->view('user/base');
        }
        public function view_prev_atten()
        {
           $this->load->model('user_m');
           $data['results']=$this->user_m->getall();
           $this->load->view('user/base',$data);
        }
        public function password_changed()
        {
           $this->load->view('user/base');
        }
        public function reset_password()
        {
           $this->load->view('user/base');
        }
        
        
 
        
}





/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */