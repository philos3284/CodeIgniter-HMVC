<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_controller extends MX_Controller 
{
 
    public function __construct()
    {
      parent::__construct();
     // Bug fix for CI form validation to function properly.
     // IMPORTANT: Add this line to all controllers to prevent callback errors when using form validation.
        $this->form_validation->CI =& $this;
    }
	
    public function index()
    {
      $this->load->view('welcome_message');
    }
	
}
