<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$this->load->model('supplier_model');

		if ($this->session->userdata('status') == 'login') {
			$count = $this->supplier_model->t_supplier();

			// Pass the count to the view
			$data['supplier_count'] = $count;
			$data['title'] = '';

			// Load the view
			$this->load->view('dashboard', $data);
			// $this->load->view('dashboard');
		} else {
			$this->load->view('login');
		}
	}

	public function count()
	{
		// Fetch the count of records
		$count = $this->supplier_model->t_supplier();

		// Pass the count to the view
		$data['supplier_count'] = 1;
		$data['title'] = '';

		// Load the view
		$this->load->view('dashboard', $data);
	}
}
