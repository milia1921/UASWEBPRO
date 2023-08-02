<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_m','mbuku');
        $this->load->model('auth_model');

        if(!$this->auth_model->current_user()){
            redirect('auth/login');
        }
    }

	public function index()
	{   
        
		$this->load->view('template/index');
	}
}
