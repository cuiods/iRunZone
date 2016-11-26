<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * index page of iRunZone
     */
	public function index()
	{
		$this->load->view('index');
	}
}
