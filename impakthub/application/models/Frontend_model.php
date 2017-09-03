<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_model extends CI_Model {
	
	public function __construct()
	 {
		parent::__construct();	
	}
	
	function pages_details($slug)
	{
		$table = 'tbl_pages';
		$this->db->where('slug', $slug);
		$query = $this->db->get($table);
		return $query->row_array();
	}
	
}
