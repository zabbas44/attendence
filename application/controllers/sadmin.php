<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sadmin extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('user_m');
            $this->load->model('admin_model');
        }
       
	public function index()
	{   
            $data['msg']  = $this->input->get_post('msg');
            $this->load->view('sadmin/base',$data);
	}
        public function crud()
        {
            $username = $this->input->post('aname');
            $pass     = $this->input->post('pwd');
            
            $condition = array(
                'a_name' => $username,
                'a_pass' => $pass
            );
            
            if($this->admin_model->get($condition)){
                
                $this->session->set_userdata('loggedin',true);
                
                $this->load->model('user_m');
                $data['results']=$this->user_m->getall();
                $this->load->view('sadmin/base',$data);
                
            }else{
                
                redirect('sadmin/index?msg=invalid login provided');
                
            }
        }
        // this function insert data in users
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
          echo"ok";  
            
            // Function to Delete selected record from database.
          /*  function del() {
            $id = $this->uri->segment(3);
            $this->delete_model->delete_u_id($id);
            $this->show_u_id();
}*/
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

