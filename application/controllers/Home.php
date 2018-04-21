<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data["title"] = "Student Time Planner";
		$this->load->view('templates-nosession/header',$data);
		$this->load->view('home',$data);
		$this->load->view('templates-nosession/footer',$data);
	}
}