<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends MX_Controller 
{
    private $model = $this->load->model('INSERT_MODEL_NAME_HERE');   
    public function __construct()
    {
      parent::__construct();
     // Bug fix for CI form validation to function properly.
     // IMPORTANT: Add these lines to all controllers to prevent callback errors when using form validation.
     // NOTE: If you autoload the form_validation class you don't need to call it here
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->model;
    }
	
    public function index()
    {
      $this->load->view('welcome');
    }
	
}
