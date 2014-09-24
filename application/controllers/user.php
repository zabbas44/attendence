<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

        public function __construct() {
         parent::__construct();
          
        }
      
	public function index()
	{
            
            $this->load->view('user/base');
	}
        public function user_atten()
        {
           $this->load->view('user/base');
        }
        public function view_prev_atten()
        {
           $this->load->view('user/base');
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