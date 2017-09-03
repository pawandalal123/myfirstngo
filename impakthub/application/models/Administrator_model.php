<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();	
	}
	function ChangePassword($adminid)
	{
		$oldpass = MD5($this->input->post('oldpass'));
		$newpass = MD5($this->input->post('newpass'));
		$query = $this->db->query("select * from tbl_admin where admin_id='".$adminid."'");
		if($query->num_rows() == 1)
		{
			return $query->row_array(); 
		}
		else
		{
			return false;
		}
		
	}
	

	function validate_user( $user_name, $password ) {
		$conditions = array();
		$conditions['user_name']=$user_name;
		$conditions['password']=$password;
		$login  =  $this->db->select('*')->from('tbl_admin')->where($conditions)->get()->row_array();
		if($login) 
		{
		   return $login; 
		}
		return false;
	}

	function select_data($table) {
		$query = $this->db->get($table);
		return $query->result();
	}
	
	function select_single_row($table,$id) {
		$this->db->where('id', $id);
		$query = $this->db->get($table);
		return $query->row_array();
	}
	
	function update_pages() {
		$id =  $this->input->post('id');
		$page_title =  addslashes(trim($this->input->post('page_title')));
		$meta_keyword =  addslashes(trim($this->input->post('meta_keyword')));
		$meta_discerption =  addslashes(trim($this->input->post('meta_discerption')));
		$Page_heading =  addslashes(trim($this->input->post('Page_heading')));
		$discerption = addslashes(trim($this->input->post('discerption')));	
		
		$query = $this->db->query("update tbl_pages set page_title='".$page_title."', meta_keyword='".$meta_keyword."', meta_discerption='".$meta_discerption."', Page_heading='".$Page_heading."', discerption='".$discerption."' where  id='".$id."'");
		return $query;	
	}
	//add_data() function insert the data to the database. It accept two parameter $table & $param.
	//$table take the table name where data to be inserted and $param is column, value pair array to be inserted. It return affected row;
	function add_data($table,$param) {
	   $this->db->insert($table, $param);
	   return $this->db->insert_id();
	}
	
	//update_data() function update the data to the database. It accept three parameter $table , $cols & $where.
	//$table take the table name where data to be inserted and $cols is column, value pair array to be inserted.
	//$where is the condition array. It return true if updated.
	function update_data($table,$cols=false,$where = false) {
		if($where){
			$this->db->where($where);
		}
		$this->db->update($table,$cols);
		//echo $this->db->last_query();die;
		return true;
	}  

//delete_db() function delete the data from the database
//it accept two parameter $table  & $where
//$table take the table name from where data to be delete
//$where is the conditional array
// it return affected row if done
function delete_db($table,$where = false) {
 
	if($where){
  			 $this->db->where($where , NULL, false);
  		 }
   	      $this->db->delete($table);
	      //echo $this->db->last_query();die;
          return $this->db->affected_rows();  
            
 }  
//active_deactive_db() function active/deactive the data in database
//it accept three parameter $table , $cols & $where
//$table take the table name where data to be activated/deactivated
//$cols is column, value pair array to be activated/deactivated
//$where is the condition array
// it return affected row if done
function active_deactive_db($table,$cols=false,$where = false) {
 
		if($where){
  			 $this->db->where($where);
  		 }
   	     $this->db->update($table,$cols);
	     //echo $this->db->last_query();die;
         return $this->db->affected_rows();  
	
 }  
	
//change_password() function change the specified admin password
//it accept three parameter $table , $cols & $where
//$table take the table name where password to be changed
//$cols is column, value pair array to be changed
//$where is the condition array
// it return true if done	

function change_password($table,$cols=false,$where = false) {
 
		if($where){
  			 $this->db->where($where);
  		 }
   	      $this->db->update($table,$cols);
	      //echo $this->db->last_query();die;
          return true;
	
 }  

} //controller
