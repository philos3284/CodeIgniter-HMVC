<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rename extends MX_Controller 
{
 
    public function __construct()
    {
      parent::__construct();
     // IMPORTANT: Add these lines to all controllers to prevent callback errors when using form validation.
     // NOTE: If you autoload the form_validation class you don't need to call it here
        $this->load->library('form_validation');
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

    private function insert($data) 
    {
      $this->INSERT_MODEL_NAME_HERE->insert($data);
    }

    private function update($id, $data) 
    {
      $this->INSERT_MODEL_NAME_HERE->update($id, $data);
    }

    private function delete($id) 
    {
      $this->INSERT_MODEL_NAME_HERE->delete($id);
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

    private function custom_query($mysql_query) 
    {
      $query = $this->INSERT_MODEL_NAME_HERE->custom_query($mysql_query);
      return $query;
    }

}
