<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class nav extends Widget {

	public function display($args) {
		

		$this->load->model('tank_auth/users');
		$data['name'] = $this->tank_auth->get_username();		


		$this->load->view('widgets/nav', $data);
	}
	
}