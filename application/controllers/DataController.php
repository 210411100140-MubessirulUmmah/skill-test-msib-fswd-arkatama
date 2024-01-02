<?php
// application/controllers/DataController.php

defined('BASEPATH') or exit('No direct script access allowed');

class DataController extends CI_Controller
{

	public function index()
	{
		$this->load->view('input_form');
	}

	public function processInput()
	{
		// Mendapatkan input dari form
		$input = $this->input->post('data_input');

		// Panggil fungsi untuk memproses input
		$this->load->model('DataModel');
		$this->DataModel->processInput($input);

		// Redirect kembali ke halaman input
		redirect('datacontroller/index');
	}
}
