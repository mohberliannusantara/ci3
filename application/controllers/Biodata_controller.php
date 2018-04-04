<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata_controller extends CI_Controller {

	public function index()
	{
    $data["biodata_query_array"] = $this->Biodata_model->getQueryArray();
    $data["biodata_query_object"] = $this->Biodata_model->getQueryObject();
    $data["biodata_builder_array"] = $this->Biodata_model->getBuilderArray();
    $data["biodata_builder_object"] = $this->Biodata_model->getBuilderObject();
		// $this->load->view('biodata'); //target passing
    $this->load->view('biodata', $data); //dengan passing data
	}
}
