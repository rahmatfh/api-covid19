<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$result['title']= 'Api Kawal Corona | RahmatFH';
		//api covid-19 indonesia
		$dataindo = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/'), true);
		$result['data_positif']= $dataindo[0]['positif'];
		$result['data_sembuh']= $dataindo[0]['sembuh'];
		$result['data_meninggal']= $dataindo[0]['meninggal'];
		//ap covid-19 provinsi
		$dataprov = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'), true);
		$total = 0;
		foreach ($dataprov as $value) {
			$total = $total+1;
		}
		$result['total_provinsi']= $total;
		$this->load->view('home', $result);
	}
	
	function dataglobal(){
		//api global
		$data = json_decode(file_get_contents('https://api.kawalcorona.com'), true);
		print_r($data);
	}
}
