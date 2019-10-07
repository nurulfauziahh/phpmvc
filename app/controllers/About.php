<?php

class About extends Controller{
	public function index($nama = 'Nurul', $pekerjaan = 'Mahasiswa')
	{
		$data[];
		$this->view('about/index', $data);
	}


	public function page()
	{
		$this->view('about/page');
	}
    
}