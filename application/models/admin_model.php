<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model {
        
    private $tbl_name = 'admin';
    
    public function __construct() {
            parent::__construct();
    }
        
    public function get($condition = array()){
        
        $this->db->select('*');
        $this->db->from($this->tbl_name);
        
        if(!empty($condition)){
           $this->db->where($condition);
        }
        
        $result = $this->db->get();
        
        if($result->num_rows() > 0){
            return true;
        }else{
            return false;
        }
        
    }
    
}



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

