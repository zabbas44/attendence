<?php
class user_m extends CI_model{
    
    var $table_name = 'user_m';
    
    /*
     * function to fetch data from the data 
     */
    
    function getall()
    {   
        
        $query = $this->db->query("SELECT * from ".$this->table_name);
        return $query->result();
    }
    
    /*
     * 
     * function to insert data to db
     */
    
    function insert($data)
    {
        $this->db->insert($this->table_name, $data);
    }
    /*
     * 
     * function to delete data to db 
     */

    function delete($data)
    {
    $this->db->delete("add_users",$data);   
    }
    

}
?>