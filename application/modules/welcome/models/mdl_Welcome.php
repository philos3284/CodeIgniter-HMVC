<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mdl_Welcome extends MY_Model 
{
    public function __construct()
    {
      parent::__construct();
      $this->table = 'INSERT_TABLE_HERE';
    }

    //== EXAMPLE ==//
    public function fetch_db_data($id) 
    {
      $this->db->order_by($id);
      $query = $this->db->get($this->table);
      return $query;
    }
    
}
