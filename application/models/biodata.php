<?php
  defined('BASEPATH') OR exit('No direct sript access allowed');
  /**
   *
   */
  class Biodata extends CI_Model
  {

    public function __construct()
    {
      parent::__construct();
    }

    public function getBiodataQueryArray()
    {
      $query =  $this->db->query("SELECT * FROM biodata");
      return $query->result_array();
    }

    public function getBiodataQueryObject()
    {
      $query =  $this->db->query("SELECT * FROM biodata");
      return $query->result();
    }
  }



 ?>
