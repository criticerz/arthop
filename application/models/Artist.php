<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artist extends CI_Model {

	public $fname=" ";
	public $lname=" ";
	public $sname=" ";
	public $bio=" ";
	public $id =" ";
	public function __construct()
	{
		parent::__construct();
		
	}
	function add($data) {
		
		$this->fname = $data['fname'];
		$this->lname = $data['lname'];
		$this->sname = $data['sname'];
		$this->bio = $data['bio'];
		$stuff = array('first_name'=>$fname,'last_name' => $lname, 'street_name' => $sname, 'bio' => $bio);

		//if(!get_by_firstname($fname)&&get_by_lastname($lname)) {
			$this->db->insert('artist', $stuff);
		
		//}else {
			//$this->session->$this->session->flashdata('error',"Artist is already created");
		//}	
	}
	function edit($data) {
		
		$this->id = $data['id'];
		$this->fname  = $data['fname'];
        		$this->sname = $data['sname'];
        		$this->bio   = $data['bio'];
        		$this->lname = $data['lname'];
        		$stuff = array('first_name'=>$fname,'last_name' => $lname, 'street_name' => $sname, 'bio' => $bio);
        		$this->db->update ('artist', $stuff, array('id' => $id));

	}
	function remove($artist) {
		$this->id=$artist['id'];
		$this->db->remove('artist', array('id'=>$id));

	}
	function get_by_id($artist) {
	
		$this->id=$artist['id'];
		$query = $this->db->get_where ('artist', array('id'=>$id));
		return $query->result();		
	}
	function get_by_firstname($artist) { 
	
		$this->fname = $artist['fname'];
		$query = $this->db->get_where('artist', array('first_name'=>$fname));
		return $query->result();
	}
	function get_by_lastname($artist) {
	
		$this->lname=$artist['lname'];
		$query = $this->db->get_where('artist', array('last_name'=>$lname);
		return $query->result();
	}




}

/* End of file  */
/* Location: ./application/models/ */
?>
