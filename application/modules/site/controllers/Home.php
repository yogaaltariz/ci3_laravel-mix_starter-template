<?php


class Home extends BaseController {

    function __construct(){
		  parent::__construct();
    }

    public function template_view($path,$data = NULL){
		$this->load->view('partial/header');
		$this->load->view($path,$data);
		$this->load->view('partial/footer');
	}

    public function index() {
        $this->template_view('index');
    }
}