<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wall extends CI_Model {

	public $lat;
	public $long;

	public function __construct()
	{
		parent::__construct();
		
	}

	function add($wall){
		$this->lat = $wall['lat'];
		$this->long = $wall['long'];
		$stuff = array('lat' => $lat, 'long' => $long);
		
		$this->db->insert('art', $stuff);
	}
	function get_by_location($loc){
		$this->lat = $loc['lat'];
		$this->long = $long['long'];
		$this->db->get_where('wall',array('lat' =>$lat, 'long' => $long));
	}
}

/* End of file  */
/* Location: ./application/models/ */