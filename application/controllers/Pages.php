<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function about(){
		$data_header['active'] = 'home';
		$data['title'] = 'Sneezetify Reset Password';

		$this->load->view('templates/header.php', $data_header);
		$this->load->view('pages/about.php', $data);
		$this->load->view('templates/footer.php');
	}

	public function tutorial(){
		$data_header['active'] = 'tutorial';
		$data['title'] = 'Cara Reset Password';

		$this->load->view('templates/header.php', $data_header);
		$this->load->view('pages/tutorial.php', $data);
		$this->load->view('templates/footer.php');
	}
}
