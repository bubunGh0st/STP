<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class achievements extends CI_Controller { 

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data["title"] = "Student Time Planner - Achievements";
		$this->load->view('templates-session/header',$data);
		$this->load->view('achievements',$data);
		$this->load->view('templates-session/footer',$data);
	}
} 