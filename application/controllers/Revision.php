<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class revision extends CI_Controller { 

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data["title"] = "Student Time Planner - Revision";
		$this->load->view('templates-session/header',$data);
		$this->load->view('revision',$data);
		$this->load->view('templates-session/footer',$data);
	}
} 