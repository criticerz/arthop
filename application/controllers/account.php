<?php if (!defined('BASEPATH')) die();

class Account extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('tank_auth');

		if (!$this->tank_auth->is_logged_in())
			redirect('/auth/login/');

	}

   public function assign_type($role_id) {
   	
      $this->users->change_role($role_id);
      $this->session->set_userdata('role', $role_id);

      redirect('/');
	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
