<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		//set  url
		$url = "http://103.226.55.159/json/data_rekrutmen.json";
		$url_nilai = "http://103.226.55.159/json/data_attribut.json";

		//call api
		$pendaftar = file_get_contents($url);
		$pendaftar = json_decode($pendaftar, true);

		$nilai = file_get_contents($url_nilai);
		$nilai = json_decode($nilai, true);

		if (isset($pendaftar->{'Form Responses 1'})) {
			$pendaftar->{'Form Responses 1'} = new stdClass();
		}

		$data = [
			'pendaftar' => $pendaftar['Form Responses 1'],
			'nilai' => $nilai
		];

		$this->load->view('home', $data);
	}
}
