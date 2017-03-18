<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends MY_Controller 
{
    public function __construct()
    {
      parent::__construct();
     // IMPORTANT: Add these lines to all controllers to prevent callback errors when using form validation.
     // NOTE: If you autoload the form_validation class you don't need to call it here
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this; // Bug fix for CI form validation to function properly.
        $this->load->model('mdl_Welcome');
        $this->model = $this->mdl_Welcome;
    }
	
    public function index()
    {
      $this->load->view('welcome');
    }
    
    // Example:
    public function rename($param) 
    {
      $query = $this->model->rename($param);
      return $query;
    }
	
}
