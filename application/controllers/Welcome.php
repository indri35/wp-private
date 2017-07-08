<?php

class Welcome extends CI_Controller {
	function __construct(){
                parent::__construct();
        }

	public function index()
	{
		$this->load->view('index');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function program()
	{
		$this->load->view('program');
	}

	public function program2()
	{
		$this->load->view('program-2');
	}

	public function program3()
	{
		$this->load->view('program-3');
	}

	public function program4()
	{
		$this->load->view('program-4');
	}

	public function registration()
	{
		$this->load->view('registration');
	}
}
