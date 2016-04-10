<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
    }

    function index()
    {
        //$language = $this->session->userdata('language');
        //$languageloc = $this->session->userdata('languageloc');
        //$this->session->set_userdata('language', 'estonian');
        //$this->session->set_userdata('languageloc', 'est_lang.php');
        if ($this->input->cookie('language')) {
            $lang = $this->input->cookie('language');
            if ($lang == 'estonian') {
                $language = 'estonian';
                $languageloc = 'est_lang.php';
            } else if ($lang == 'english') {
                $language = 'english';
                $languageloc = 'eng_lang.php';
            }
        } else {
            $language = 'estonian';
            $languageloc = 'est_lang.php';
        }
        $this->lang->load($languageloc, $language);
        $this->load->helper(array('form'));
        $this->load->view('index_out');
    }
    function index2($languageloc = 'est_lang.php', $language = 'estonian')
    {
        $language = $this->session->userdata('language');
        $languageloc = $this->session->userdata('languageloc');
        //$this->session->set_userdata('language', 'estonian');
        //$this->session->set_userdata('languageloc', 'est_lang.php');
        $this->lang->load($languageloc, $language);
        $this->load->helper(array('form'));
        $this->load->view('index_out');
    }

    function set()
    {
        $cookie = array(
            'name' => 'language',
            'value' => 'estonian',
            'expire' => '86000',
        );
        $this->input->set_cookie($cookie);
    }
}

?>