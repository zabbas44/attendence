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
        public function edit_record()
        {
            $this->load->view('sadmin/base');
        }
        public function delete_record()
        {
            $this->load->view('sadmin/base');
            // Function to Delete selected record from database.
            function del() {
            $id = $this->uri->segment(3);
            $this->delete_model->delete_u_id($id);
            $this->show_u_id();
}
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

        public function veri()
    {
      /* print_r($this->input->post()); */
//       echo"successful";
       $username= $this->input->post('uname');
       $pass= $this->input->post('pwd');
       $this->load->model('user_m');
       $res=$this->user_m->verifyLogin($username,$pass);
       if($res){
           echo 'Login Successfull';
       }
     else {
         echo 'Go back.';
          }
        
}



}

