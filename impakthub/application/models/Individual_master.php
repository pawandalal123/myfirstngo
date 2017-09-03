<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Individual_master extends CI_Model {
	// public $table;
	public function __construct()
	 {
		$this->table='individual_master';
		parent::__construct();	
	}

	public function isExsits($table = null, $conditions = array()){
		if($table != null){
			$total = $this->db->where($conditions)
							  ->count_all_results($table);
			if($total == 1) {
				return true;
			}								
		}
		return false;
	}

function select_data($cols='*',$where=false,$where_or=false,$where_in=false) {
     if($where){
  		 $this->db->where($where);
  	 }else if($where_or){
		 $this->db->where($where_or , NULL, false);
	 }else if($where_in){
		 $this->db->where($where_in , NULL, false);
	 }
	   $this->db->select($cols);
	   #$this->db->from();
	   $query=$this->db->get($this->table);
	  //echo $this->db->last_query();die;
	   return $query->result();
}

///////// function for single result////

	public function getBy($pageid)
	{
		if($pageid)
		{
			$this->db->where($pageid);
		}
		$pageData = $this->db->get($this->table)->row();

		return $pageData;

	}


	
	   public function AdduserData($data)
	      {
		   $this->db->insert($this->table, $data);
		//  echo $this->db->last_query();
		  return  $this->db->insert_id();
		  }
		  
		  public function updateDetails($where,$data)
		  {
			 $this->db->where($where);
             return $this->db->update($this->table, $data); 
		  }
		  public function deletedata($where)
		  {
			 $this->db->where($where);
             $this->db->delete($this->table); 
		  }
		
		
}

