<?php
// application/models/DataModel.php

defined('BASEPATH') or exit('No direct script access allowed');

class DataModel extends CI_Model
{

	public function processInput($input)
	{
		// Pisahkan input menggunakan pola regex untuk nama, usia, dan kota
		preg_match('/([^\d]+)\s?(\d+\s?(?:TAHUN|THN|TH)?)\s?(.+)/i', $input, $matches);

		// Ambil hasil dari pola regex
		$nama = isset($matches[1]) ? strtoupper($matches[1]) : '';
		$usia = isset($matches[2]) ? trim(preg_replace('/(?:TAHUN|THN|TH)/i', '', $matches[2])) : 0;
		$kota = isset($matches[3]) ? strtoupper($matches[3]) : '';

		// Simpan data ke dalam database
		$data = array(
			'NAME' => $nama,
			'AGE' => $usia,
			'CITY' => $kota,
			'CREATED_AT' => date('Y-m-d H:i:s')
		);

		$this->db->insert('data', $data);
	}
}
