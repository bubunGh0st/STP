<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data["title"] = "Student Time Planner - Dashboard";
		$this->load->view('templates-session/header',$data);
		$this->load->view('dashboard',$data);
		$this->load->view('templates-session/footer',$data);
	}

	public function testAjax()
	{
		if($_POST["amount"]>=50){
			$result = "over 50";
		}else{
			$result = "males";
		}
        echo($_POST["taskid"]." - ".$_POST["amount"]." ".$result);
	}
}