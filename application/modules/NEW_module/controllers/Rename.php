<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rename extends MX_Controller 
{
 
    public function __construct()
    {
      parent::__construct();

        $this->form_validation->CI =& $this;
    }
	
    public function index()
    {
      $this->load->view('rename');
    }