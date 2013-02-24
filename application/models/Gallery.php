<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Model {

	public $lat;
	public $long;
	public $name;
	public $address;
	public $genre;
	public $gal_archive_id;
	public $phone;
	public $id ;

	public function __construct()
	{
		parent::__construct();
		
	}
	function add($data){
		$this->lat= $data['lat'];
		$this->long = $data['long'];
		$this->name = $data['name'];
		$this->address = $data['address'];
		$this->genre = $data['genre'];
		$this->phone = $data['phone'];

		$stuff = array('lat'=>$lat, 'long' => $long, 'address' => $address, 'genre' => $genre, 'phone' => $phone, 'name' => $name);
		$this->db->insert('art', $stuff);
	}
	function get_by_id($galid){
		$this->id= $galid;
		$query = $this->db->get_where('gallery', array('id' => , $id));
		return $query->result();
	}
	function get_by_genre($galgen){
		$this->genre = $galgen;
		$query = $this->db->get_where('gallery', array('genra' =>, $genre));
		return $query->result();
	}
	function get_by_name($galname){
		$this->name = $galname;
		$query = $this->db->get_where('gallery', array('name' =>, $name));
		return $query->result();
	}


}

/* End of file  */
/* Location: ./application/models/ */