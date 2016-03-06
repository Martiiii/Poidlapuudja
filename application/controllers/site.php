<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Site extends CI_Controller {

	public function __construct() {
		parent::__construct();
		session_start();
	}


public function nimekiri()
	{	
		$data = array(
			'url' => 'site/nimekiri'
		);
		$this->session->set_userdata($data);
		$this->load->model('model_posts');
		$data['query'] = $this->model_posts->getPosts();
		$this->load->view('nimekiri', $data);
	}

}
