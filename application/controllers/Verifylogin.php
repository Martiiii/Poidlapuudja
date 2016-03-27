<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('user','',TRUE);
        $this->session->set_userdata('language', 'estonian');
        $this->session->set_userdata('languageloc', 'est_lang.php');
        $language = $this->session->userdata('language');
        $languageloc = $this->session->userdata('languageloc');
        $this->lang->load($languageloc, $language);
    }

    function index()
    {
//This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kasutajanimi', 'Kasutajanimi', 'trim|required');
        $this->form_validation->set_rules('parool', 'Parool', 'trim|required|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
//Field validation failed.  User redirected to login page
            $this->load->view('index_out');

        }
        else
        {
//Go to private area
            redirect('index/pealeht', 'refresh');
        }

    }

    function fb()
    {


        $sess_array = array(
            'ID' => $this->input->post('id'),
            'username' => $this->input->post('name')
        );
        $this->session->set_userdata('logged_in', $sess_array);

        redirect('index/pealeht', 'refresh');

    }

    function check_database($password)
    {
//Field validation succeeded.  Validate against database
        $username = $this->input->post('kasutajanimi');

//query the database
        $result = $this->user->login($username, $password);

        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'ID' => $row->ID,
                    'username' => $row->Kasutajanimi
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
}
?>