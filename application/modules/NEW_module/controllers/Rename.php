<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rename extends MX_Controller 
{
 
    public function __construct()
    {
      parent::__construct();
     // IMPORTANT: Add this line to all controllers to prevent callback errors when using form validation.
        $this->form_validation->CI =& $this;
        $this->load->model('INSERT_MODEL_NAME_HERE');
    }
	
    public function index()
    {
      $this->load->view('rename');
    }
	
    public function get($order_by) 
    {
      $query = $this->INSERT_MODEL_NAME_HERE->get($order_by);
      return $query;
    }

    public function get_with_limit($limit, $offset, $order_by) 
    {
      $query = $this->INSERT_MODEL_NAME_HERE->get_with_limit($limit, $offset, $order_by);
      return $query;
    }

    public function get_where($id) 
    {
      $query = $this->INSERT_MODEL_NAME_HERE->get_where($id);
      return $query;
    }

    public function get_where_custom($col, $value) 
    {
      $query = $this->INSERT_MODEL_NAME_HERE->get_where_custom($col, $value);
      return $query;
    }

    public function _insert($data) 
    {
      $this->INSERT_MODEL_NAME_HERE->_insert($data);
    }

    public function _update($id, $data) 
    {
      $this->INSERT_MODEL_NAME_HERE->_update($id, $data);
    }

    public function _delete($id) 
    {
      $this->INSERT_MODEL_NAME_HERE->_delete($id);
    }

    public function count_where($column, $value) 
    {
      $count = $this->INSERT_MODEL_NAME_HERE->count_where($column, $value);
      return $count;
    }

    public function get_max() 
    {
      $max_id = $this->INSERT_MODEL_NAME_HERE->get_max();
      return $max_id;
    }

    public function _custom_query($mysql_query) 
    {
      $query = $this->INSERT_MODEL_NAME_HERE->_custom_query($mysql_query);
      return $query;
    }

}
