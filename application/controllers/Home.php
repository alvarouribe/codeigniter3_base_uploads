<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['tab'] = 'Upload your file';
		$data['title'] = 'Upload your file here';
		$data['error'] = '';

		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

	public function do_upload()
	{ 
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1024;
		// $config['max_width']            = 2048;
		// $config['max_height']           = 2048;
		$data['tab'] = 'Oops!';
		$data['title'] = 'Attention!';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('header', $data);
			$this->load->view('home', $error);
			$this->load->view('footer');
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$data['tab'] = 'Upload Completed';
			$data['title'] = 'Your file was successfully uploaded!';
			$this->load->view('header', $data);
			$this->load->view('upload_success', $data);
			$this->load->view('footer');
		}
	}
}
