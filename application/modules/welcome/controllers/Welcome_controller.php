<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_controller extends MY_Controller 
{
 
    public function __construct()
    {
      parent::__construct();
    }
	
	public function index()
	{
      $this->load->view('welcome_message');
	}
	
}