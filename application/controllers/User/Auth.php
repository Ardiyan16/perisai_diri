<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('user/auth/login');
	}

	public function v_registrasi()
	{
		$this->load->view('user/auth/register');
	}
}