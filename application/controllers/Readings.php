<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class readings extends CI_Controller { 

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data["title"] = "Student Time Planner - Readings";
		$this->load->view('templates-session/header',$data);
		$this->load->view('readings',$data);
		$this->load->view('templates-session/footer',$data);
	}
} 