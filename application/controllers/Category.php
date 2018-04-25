<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */
class Category extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    // meload semua model yang dipakai
		$this->load->model('blog_model');
		$this->load->model('category_model');
  }

  public function index()
	{
		// Judul Halaman
		$data['page_title'] = 'List Kategori';

		// mendapatkan semua kategori
		$data['categories'] = $this->category_model->get_all_categories();

		$this->load->view('categories/cat_view', $data);
	}

  public function create()
	{
		// Judul Halaman
		$data['page_title'] = 'Buat Kategori Baru';

		$this->load->library('form_validation');

		// Form validasi untuk Nama Kategori
		$this->form_validation->set_rules(
			'cat_name',
			'Nama Kategori',
			'required|is_unique[categories.cat_name]',
			array(
				'required' => 'Isi %s donk, males amat.',
				'is_unique' => 'Judul <strong>' . $this->input->post('cat_name') . '</strong> sudah ada bosque.'
			)
		);

    if($this->form_validation->run() === FALSE)
    {
			$this->load->view('cat_create', $data);
		} else {
			$this->category_model->create_category();
			redirect('category');
		}
  }

}

 ?>
