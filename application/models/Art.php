<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Art extends CI_Model {

	public $img_url;
	public $release ;
	public $artist_id;
	public $title;
	public $description ;
	public $id ;

	public function __construct()
	{
		parent::__construct();
		
	}
	function add($data){
		$this->img_url= $data['url'];
		$this->release = $data['date'];
		$this->artist_id = $data['who_id'];
		$this->title = $data['title'];
		$this->description =$data['description'];

		$stuff = array('img_url'=>$img_url,'release_date' => $release, 'artist_id' => $artist_id, 'title' => $title, 'description' => $description);
		$this->db->insert('art', $stuff);
	}
	function get_by_id($artid){
		$this->id= $art;
		$query = $this->db->get_where('artist', array('id' => , $id));
		return $query->result();
	}
	function get_by_artist($artistid){
		$this->artist_id = $artistid;
		$query = $this->db->get_where('artist', array('artist_id' =>, $artistid));
		return $query->result();
	}
	function get_by_title($data){
		$this->title= $data;
		$query = $this->db->get_where('artist',array('title', $title));
		return $query->result();
	}


}

/* End of file  */
/* Location: ./application/models/ */