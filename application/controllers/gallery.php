<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function add()
	{
		

		$this->load->view('gallery/add');

	}

}

/* End of file gallery.php */
/* Location: ./application/controllers/gallery.php */