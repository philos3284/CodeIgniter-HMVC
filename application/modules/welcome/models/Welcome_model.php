<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome_model extends CI_Model 
{
    private $table = 'INSERT_TABLE_NAME_HERE';
    
    public function __construct()
    {
      parent::__construct();
    }

    // Example:
    public function rename($param) 
    {
      $this->db->order_by($param);
      $query=$this->db->get($this->table);
      return $query;
    }
    
}
