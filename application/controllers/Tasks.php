<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tasks extends CI_Controller { 

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data["title"] = "Student Time Planner - Tasks";
		$this->load->view('templates-session/header',$data);
		$this->load->view('tasks',$data);
		$this->load->view('templates-session/footer',$data);
	}

	public function testAjax()
	{
        echo("aaa");
        
	}
} 