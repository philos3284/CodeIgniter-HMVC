<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rename extends MX_Controller 
{
 
    public function __construct()
    {
      parent::__construct();
      //IMPORTANT: Add the line below to ALL controllers in order to use callbacks during form validation.
        $this->form_validation->CI =& $this;
    }
	
    public function index()
    {
      $this->load->view('rename');
    }
