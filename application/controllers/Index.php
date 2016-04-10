<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start(); //we need to call PHP's session object to access it through CI
/**
 * Created by PhpStorm.
 * User: Marti
 * Date: 19.02.2016
 * Time: 17:44
 */

class Index extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('encrypt');
        $this->load->driver('session');
        $this->load->helper('cookie');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        //$this->session->set_userdata('id', 234);
        //$this->session->set_userdata('language', 'estonian');   dno kas nendega error??
        //$this->session->set_userdata('languageloc', 'est_lang.php');
        if(isset($_GET["getSoidud"])) $this->getSoidud();

    }

    public function anneta() {

            $this->load->helper('url');
            $this->load->view('pay');

    }
    public function onnestus() {
        $this->load->helper('url');
        $this->load->view('onnestus');
    }
    public function ebaonnestus() {
        $this->load->helper('url');
        $this->load->view('ebaonnestus');
    }
    public function receive() {
        $this->load->helper('url');
        $this->load->view('receive');
    }

    public function kontakt() {
        $this->load->database();
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
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
            // $sql = "mingiparing";
            // $query = $this->db->query($sql);
            // $data['minginimi'] = $query->result();y
            $this->load->helper('url');
            $this->load->view('kontakt', $data);

        }
        else
        {
            //If no session, redirect to login page
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
            $this->load->helper('url');
            $this->load->view('kontakt_out');
        }
    }

    public function Proovifail() {
        $this->load->database();
        $sql = "SELECT * FROM kuvasoidud";
        $query = $this->db->query($sql);
        $result = $query->result();
        $data['prooviks'] = $result;
        $sql2 = "SELECT * FROM kuvakasutajad ORDER BY Liitumine ASC";
        $query2 = $this->db->query($sql2);
        $data['userdata'] = $query2->result();
        $this->load->view("Proovifail", $data);

    }

    public function cache() {
        $this->load->view('manifest.appcache');
    }

    public function pealeht() {
        $this->load->database();
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
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
            // $sql = "mingiparing";
            // $query = $this->db->query($sql);
            // $data['minginimi'] = $query->result();y
            $sql1 = "SELECT * FROM soitekokku";
            $sql2 = "SELECT * FROM kasutajaidkokku";
            $query1 = $this->db->query($sql1);
            $query2 = $this->db->query($sql2);
            $data['soidudkokku'] = $query1->result();
            $data['kasutajaidkokku'] = $query2->result();
            $this->load->helper('url');
            $this->load->view('index', $data);

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }


    public function soidud() {
        $this->load->database();
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
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
            $this->load->helper('url');
            $sql = "SELECT * FROM kuvasoidud" ;
            $query = $this->db->query($sql);
            $data['uudistekogu'] = $query->result();
            $this->load->view('soidud', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    public function kasutajad() {
        $this->load->database();
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
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
            $this->load->helper('url');
            $sql = "SELECT * FROM kuvakasutajad ORDER BY Liitumine ASC";
            $query = $this->db->query($sql);
            $data['kasutajad'] = $query->result();
            $this->load->view('kasutajad', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }


    }

    public function minusoidud() {
        $this->load->database();
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
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
            $this->load->helper('url');
            $sql = "SELECT * FROM kuvasoidud";
            $query = $this->db->query($sql);
            $data['uudistekogu'] = $query->result();
            $this->load->view('minusoidud', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }


    }

    public function lisauudis() {
        $this->load->database();
        $eesnimi = $_POST['eesnimi'];
        $perenimi = $_POST['perenimi'];
        $kasutajanimi = $_POST['kasutajanimi'];
        $email = $_POST['email'];
        $telefoninumber = $_POST['telnr'];
        $parool = md5($_POST['parool']);

        $this->form_validation->set_rules('eesnimi', 'Eesnimi', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('perenimi', 'Perenimi', 'trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
        $this->form_validation->set_rules('parool', 'Parool', 'trim|required|min_length[8]|max_length[30]|md5');
        $this->form_validation->set_rules('kasutajanimi', 'Kasutajanimi', 'trim|required|alpha_numeric|min_length[5]|max_length[30]|is_unique[kuvakasutajad.kasutajanimi]');
        $this->form_validation->set_rules('telnr', 'Telefoninumber', 'trim|numeric');

        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $tekst = validation_errors();
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">'.$tekst.'</div>');
            redirect('login', 'refresh');
        }
        else
        {
            // insert form data into database
            if ($this->db->query("CALL lisakasutaja('$kasutajanimi', '$eesnimi', '$perenimi', '$email', '$parool', '$telefoninumber')"))
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Registreerimine õnnestus!</div>');
                redirect('login', 'refresh');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Registreerimine ebaõnnestus!</div>');
                redirect('login', 'refresh');
            }
        }

    }

    public function lisasoit()
    {
        $this->load->database();
        $lahtekoht = $_POST['lahtekoht'];
        $sihtkoht = $_POST['sihtkoht'];
        $lisainfo = $_POST['lisainfo'];
        $username = $this->session->userdata('logged_in')['username'];
        $sql = "SELECT id FROM kuvakasutajad WHERE kasutajanimi='$username'" ;
        $query = $this->db->query($sql);
        $autojuht = 0;
        //$autojuht = $query->result();
        foreach ($query->result_array() as $row)
        {
            $autojuht = $row['ID'];
        }

        if ($this->db->query("CALL lisasoit('$lahtekoht', '$sihtkoht', '$autojuht', '$lisainfo')"))
        {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Lisamine õnnestus!</div>');
            redirect('soidud', 'refresh');
        }
        else
        {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Lisamine ebaõnnestus!</div>');
            redirect('soidud', 'refresh');
        }

    }

    public function sitemap() {
        $this->load->database();
        $sql = "SELECT * FROM kuvaurlid";
        $query = $this->db->query($sql);
        $data['urlid'] = $query->result();
        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view('kaart', $data);

    }

    public function site_map($languageloc = 'est_lang.php', $language = 'estonian') {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
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
            $this->load->view('lehekaart');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }


    }

    public function getSoidud() {
        $this->load->database();
        $sql = "SELECT * FROM SOIDUD";
        $query = $this->db->query(sql);
        $result = $query->result();

        echo $result;
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('index', 'refresh');
    }

    public function change_lang_toEng()
    {
        $this->session->set_userdata('language', 'english');
        $this->session->set_userdata('languageloc', 'eng_lang.php');
        $cookie = array(
            'name' => 'language',
            'value' => 'english',
            'expire' => '86000',
        );
        $this->input->set_cookie($cookie);
    }

    public function change_lang_toEst()
    {
        $this->session->set_userdata('language', 'estonian');
        $this->session->set_userdata('languageloc', 'est_lang.php');
        $cookie = array(
            'name' => 'language',
            'value' => 'estonian',
            'expire' => '86000',
        );
        $this->input->set_cookie($cookie);
    }

    /*if ($language == 'est') {
        $this->session->unset_userdata('language');
        $this->session->unset_userdata('languageloc');
        $this->session->set_userdata('language', 'estonian');
        $this->session->set_userdata('languageloc', 'est_lang.php');

    }
    else if ($language == 'eng') {
        $this->session->unset_userdata('language');
        $this->session->unset_userdata('languageloc');
        $this->session->set_userdata('language', 'english');
        $this->session->set_userdata('languageloc', 'eng_lang.php');

    }
*/



    /*    public function view($page = 'index')
        {
            if (!file_exists(APPPATH.'/views/'.$page.'.php')) {
                //show_404();
                echo APPPATH.'/views/'.$page.'.php';
            }

            $data['title'] = ucfirst($page);

            $this->load->helper('url');
            $this->load->view($page, $data);
        }
    */
}