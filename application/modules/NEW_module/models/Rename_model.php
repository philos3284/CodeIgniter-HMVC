<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rename_model extends CI_Model 
{
    private $table = 'INSERT_TABLE_NAME_HERE';
    
    public function __construct()
    {
      parent::__construct();
    }

    public function get($order_by) 
    {
      $this->db->order_by($order_by);
      $query=$this->db->get($this->table);
      return $query;
    }

    public function get_with_limit($limit, $offset, $order_by) 
    {
      $this->db->limit($limit, $offset);
      $this->db->order_by($order_by);
      $query=$this->db->get($this->table);
      return $query;
    }

    public function get_where($id) 
    {
      $this->db->where('id', $id);
      $query=$this->db->get($this->table);
      return $query;
    }

    public function get_where_custom($col, $value) 
    {
      $this->db->where($col, $value);
      $query=$this->db->get($this->table);
      return $query;
    }
    protected function insert($data) 
    {
      $this->db->insert($this->table, $data);
    }

    protected function update($id, $data) 
    {
      $this->db->where('id', $id);
      $this->db->update($this->table, $data);
    }

    protected function delete($id) 
    {
      $this->db->where('id', $id);
      $this->db->delete($this->table);
    }

    public function count_where($column, $value) 
    {
      $this->db->where($column, $value);
      $query=$this->db->get($this->table);
      $num_rows = $query->num_rows();
      return $num_rows;
    }

    public function count_all() 
    {
      $query=$this->db->get($this->table);
      $num_rows = $query->num_rows();
      return $num_rows;
    }

    public function get_max() 
    {
      $table = $this->get_table();
      $this->db->select_max('id');
      $query = $this->db->get($this->table);
      $row=$query->row();
      $id=$row->id;
      return $id;
    }

    protected function custom_query($mysql_query) 
    {
      $query = $this->db->query($mysql_query);
      return $query;
    }
    
}
