<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('login_model', '', TRUE);
    }

    function index() {
        //This method will have the credentials validation
        $data =  array();
		$response = array();
		
        $data['controller'] = '';
        
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            $this->load->view('login_view', $data);
			
			//$response['status'] = 0;
//			$response['msg'] = validation_errors();
//			echo json_encode($response);
			
        } else {
            //Go to private area
			
			//$response['status'] = 1;
//			$response['msg'] = 'redirect';
//			echo json_encode($response);
			
			redirect('home', 'refresh');
        }
    }

    function check_database($password) {
        //Field validation succeeded.  Validate against database
        $email = $this->input->post('email');
        
        $this->load->model('users');
        
        $user_details = $this->users->get_details_by_email($email);
        
        if($user_details){
            
            if($user_details['ecu_status'] == 1){
                //query the database
                $result = $this->login_model->company_user_login($email, $password);

                if ($result) {
                    $sess_array = array();
                    $online_user_data = array();
                    foreach ($result as $row) {
                        $sess_array = array(
                            'user_id' => base64_encode($row['ecu_id']),
                            'u_username' => $row['ecu_username'],
                            'u_fname' => $row['ecu_f_name'],
                            'u_lname' => $row['ecu_l_name'],
                            'u_comp_id' => base64_encode($row['ecu_company_id']),
                        );
                        $online_user_data = array(
                            'session'       => md5($row['ecu_id'].'_'.$row['ecu_company_id'].'_'.$row['ecu_username']),
                            'ou_user_id'    => $row['ecu_id'],
                            'company_id'    => $row['ecu_company_id'],
                            'online_time'   => date('Y-m-d H:i:s', time()),
                            'ou_web'        => 1,
							'status_flag'   => 0
                        );
                        $this->load->model('online_users_model', '', TRUE);
                        $this->online_users_model->set_user_online($online_user_data);

                        $this->session->set_userdata('u_logged_in', array_merge($online_user_data, $sess_array));

                       /*
                        * send push to all users for notification
                        */

                        $this->load->library('../controllers/push');
                        $this->push->send_push_all($online_user_data['session']);

                        break;

                    }

                    return TRUE;

                } else {
                    $this->form_validation->set_message('check_database', 'Invalid email or password');
                    return false;
                }
            } else {
                $this->form_validation->set_message('check_database', 'This account is not activated yet, Please activate first then login.');
                return false;
            }
        } else {
            $this->form_validation->set_message('check_database', 'Invalid email or password');
            return false;
        }
    }

}

?>