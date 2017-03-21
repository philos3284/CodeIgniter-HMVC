<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
     // NOTE: Add the top two lines to all controllers to prevent callback errors during form validation. If you autoload form validation you don't have to call it here.
        $this->load->library('form_validation');
     // IMPORTANT: Bug fix for CI form_validation to function properly
        $this->form_validation->CI =& $this;
        $this->load->model('mdl_Welcome');
        $this->model = $this->mdl_Welcome;
    }
	
    public function index()
    {
      $this->load->view('welcome');
    }
    
    //== EXAMPLE
    public function fetch_db_data($id) 
    {
      $query = $this->model->get($id);
      return $query;
    }
	
}
