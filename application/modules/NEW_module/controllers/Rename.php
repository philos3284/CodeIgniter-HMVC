<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rename extends MY_Controller 
{
    public function __construct()
    {
      parent::__construct();
    /* 
        NOTE: Add these lines to all controllers to prevent callback errors when using form validation. If you autoload the           form_validation class you don't need to call it here.
    */

     // Load library
        $this->load->library('form_validation');
     // Fix for CI form_validation to function properly
        $this->form_validation->CI =& $this;
	    
     // Load model
        $this->load->model('INSERT_MODEL_HERE');
        $this->model = $this->INSERT_MODEL_HERE;
    }
	
    public function index()
    {
      $this->load->view('rename');
    }

    public function get($order_by) 
    {
      $query = $this->model->get($order_by);
      return $query;
    }

    public function get_with_limit($limit, $offset, $order_by) 
    {
      $query = $this->model->get_with_limit($limit, $offset, $order_by);
      return $query;
    }

    public function get_where($id) 
    {
      $query = $this->model->get_where($id);
      return $query;
    }

    public function get_where_custom($col, $value) 
    {
      $query = $this->model->get_where_custom($col, $value);
      return $query;
    }

    private function insert($data) 
    {
      $this->model->insert($data);
    }

    private function update($id, $data) 
    {
      $this->model->update($id, $data);
    }

    private function delete($id) 
    {
      $this->model->delete($id);
    }

    public function count_where($column, $value) 
    {
      $count = $this->model->count_where($column, $value);
      return $count;
    }

    public function get_max() 
    {
      $max_id = $this->model->get_max();
      return $max_id;
    }

    private function custom_query($mysql_query) 
    {
      $query = $this->model->custom_query($mysql_query);
      return $query;
    }

}
