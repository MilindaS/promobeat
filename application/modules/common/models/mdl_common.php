<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_common extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	
	public function getDivisionById($id){
		$sql = "SELECT * FROM divisions where id=?";
		$params = array($id);
		$query = $this->db->query($sql,$params);
		$result = $query->result_array();
		return $result[0];
	}
	
	public function getDesignationById($id){
		$sql = "SELECT * FROM designations where id=?";
		$params = array($id);
		$query = $this->db->query($sql,$params);
		$result = $query->result_array();
		return $result[0];
	}
	

	public function getDivisions(){
		$sql = "SELECT * FROM divisions";
		$params = array();
		$query = $this->db->query($sql,$params);
		$result = $query->result_array();
		return $result;
	}
       
    public function getDesignations(){
		$sql = "SELECT * FROM designations";
		$params = array();
		$query = $this->db->query($sql,$params);
		$result = $query->result_array();
		return $result;
	}
}
