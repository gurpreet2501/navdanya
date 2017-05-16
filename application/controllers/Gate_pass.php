<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gate_pass extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('grocery_CRUD');
		auth_force();
	}

	public function index(){
		$this->load->view('gate-pass');	}
}
