<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('homepage_model');
	}
	
	function index()
	{
		$this->load->view('homepage/homepage_index');
	}
}