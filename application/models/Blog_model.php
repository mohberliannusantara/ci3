<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

  function __construct()
  {
    parent::__construct();
  }

  public function getAll()
  {
    // contoh Query Manual
    // $query = $this->db->query('
    // 		SELECT * FROM blogs
    // 	');

    // Memakai Query Builder untuk mengambil data dari table
    $query = $this->db->get("blog");

    //return dalam bentuk object
    return $query->result_array();
  }

  public function insert($data)
  {
    if ($this->db->insert("blog", $data)) {
      return true;
    }
  }

  public function delete($id) {
    if ($this->db->delete("blog", "id = ".$id)) {
      return true;
    }
  }

  public function update($data,$old_id) {
    $this->db->set($data);
    $this->db->where("id", $old_id);
    $this->db->update("blog", $data);
  }

  public function getOne($id) {
    $query = $this->db->query("select * from blog where id='$id'");
    return $query->result_array();
  }
}
?>
