<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

        public function __construct() {
         parent::__construct();
          
        }
      
	public function index()
	{
            
            $this->load->view('user/base');
	}
        public function maddevz()
        {
           $this->load->view('user/base');
        }
//        public function home()
//        {
//            $this->load->model("sample");
//            $this->sample->get();
//        }
// 
        
}





/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */