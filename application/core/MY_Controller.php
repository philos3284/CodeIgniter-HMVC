<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller 
{

    /**
     * NOTE:
     * All controllers MUST extend MX_Controller, otherwise, use the MY_Controller created for your convenience, instead of MX_Controller directly.
     * You can read about controller prefixes and subclasses in the CI Manual. 
     * 
     * Base Module Controller
     *
     * Extends the HMVC Plugin.
     */
 
    public function __construct()
    {
      parent::__construct();
	  //Bug fix for CI form validation to function properly
	  $this->form_validation->CI =& $this;
    }
	
    public function index()
    {
    }
	
}
