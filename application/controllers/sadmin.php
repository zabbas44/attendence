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
            $this->load->view('sadmin/base');
        }
        public function add_user()
        {
            $this->load->view('sadmin/base');
        }
        public function view_log()
        {
            $this->load->view('sadmin/base');
        }
        public function password_changed()
        {
            $this->load->view('sadmin/base');
        }
        public function reset_password()
        {
            $this->load->view('sadmin/base');
        }
        
        
        

        
}





/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */