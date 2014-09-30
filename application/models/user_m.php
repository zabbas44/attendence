<?php
class User_m extends CI_model{
    
    var $table_name = 'user_m';
    
    /*
     * function to fetch data from the data 
     */
    
    function getall()
    {   
        
        $query = $this->db->query("SELECT * from user_m");
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
    
    // Function to Delete selected record from table name students.
   function del($id){
        $this->db->where('u_id', $id);
        $this->db->delete('user_m');
   }
   /*
  function verifyLogin($username,$pass)
    {
        $sql_Query = "select * from  where a_name='".$username."' and a_pass='".$pass."'";
        
        $this->db->select('*');
        $this->db->from();
        $query=$this->db->query($sql_Query);
        $result_arr = $query->result();
        if(empty($result_arr)){
            return false;
        }else
            return true;
    }  
*/
}
?>