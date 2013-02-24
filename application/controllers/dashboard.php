<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');

		if (!$this->tank_auth->is_logged_in())
			redirect('/auth/login/');

	}

	function index()
	{
		
		//$data['user_id']	= $this->tank_auth->get_user_id();
		//$data['username']	= $this->tank_auth->get_username();
		//$this->load->view('welcome', $data);

		$data['role'] = $this->users->get_role();

		if( $data['role'] == 2 )
			$data['art'] = array();



		$this->template->content->view('dashboard', $data);
    	$this->template->publish();

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */