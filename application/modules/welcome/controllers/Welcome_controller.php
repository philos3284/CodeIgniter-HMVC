<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_controller extends MY_Controller 
{
 
    public function __construct()
    {
      parent::__construct();
      //Bug fix for CI form validation to function properly
      //IMPORTANT: Add the line below to ALL controllers in order to use callbacks during form validation
        $this->form_validation->CI =& $this;
    }
	
    public function index()
    {
      $this->load->view('welcome_message');
    }
	
}
