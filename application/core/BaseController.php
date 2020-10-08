<?php


class BaseController extends MY_Controller {


	function __construct()
	{
		parent::__construct();
    }

	public function admin_template($path,$data = NULL){
		$this->load->view('partial/header');
		$this->load->view($path,$data);
		$this->load->view('partial/footer.php');
	}

	public function site_template($path,$data = NULL){
		$this->load->view($path,$data);
	}
}