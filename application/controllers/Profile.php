<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller { 

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data["title"] = "Student Time Planner - Profile";
		$this->load->view('templates-session/header',$data);
		$this->load->view('profile',$data);
		$this->load->view('templates-session/footer',$data);
	}
} 