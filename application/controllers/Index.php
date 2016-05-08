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
        $this->load->library('password');
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

    public function liitutudsoidud() {
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
            $sql = "SELECT * FROM kuvareisijad" ; //vaade vaja teha veel
            $query = $this->db->query($sql);
            $userid = $this->session->userdata('logged_in')['ID'];
            $returnarray = array();
            if ($query->num_rows() > 0)
            {
                foreach ($query->result() as $row)
                {
                    $arr = unserialize($row->Reisijad);
                    if (!is_array($arr)) $arr = array();
                   foreach ($arr as $val) {
                       if ($val == $userid) array_push($returnarray, $row);
                   }

                }
            }
            $data['liitutudsoidud'] = $returnarray;
            $this->load->view('liitutudsoidud', $data);
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
            $username = intval($this->session->userdata['logged_in']['ID']);

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
            $sql = "SELECT * FROM kuvasoidud WHERE UserID = $username";
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
        $eesnimi = htmlspecialchars(strip_tags($_POST['eesnimi']));
        $perenimi = htmlspecialchars(strip_tags($_POST['perenimi']));
        $kasutajanimi = htmlspecialchars(strip_tags($_POST['kasutajanimi']));
        $email = htmlspecialchars(strip_tags($_POST['email']));
        $telefoninumber = htmlspecialchars(strip_tags($_POST['telnr']));
        //$parool = md5($_POST['parool']);
        $paroolsisse = $this->password->create_hash($_POST['parool']);

        $this->form_validation->set_rules('eesnimi', 'Eesnimi', 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('perenimi', 'Perenimi', 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
        $this->form_validation->set_rules('parool', 'Parool', 'trim|required|min_length[8]|max_length[30]');
        $this->form_validation->set_rules('kasutajanimi', 'Kasutajanimi', 'trim|required|min_length[5]|max_length[30]|is_unique[kuvakasutajad.kasutajanimi]');
        $this->form_validation->set_rules('telnr', 'Telefoninumber', 'trim|numeric|required');

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
            if ($this->db->query("CALL lisakasutaja('$kasutajanimi', '$eesnimi', '$perenimi', '$email', '$paroolsisse', '$telefoninumber')"))
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Registreerimine õnnestus!</div>');
                redirect('login', 'refresh');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Registreerimine ebaõnnestus!</div>');
                //redirect('login', 'refresh');
            }
        }

    }

    public function lisasoit()
    {
        $this->load->database();
        $this->load->helper('url');
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
        $lahtekoht = htmlspecialchars(strip_tags($_POST['lahtekoht']));
        $sihtkoht = htmlspecialchars(strip_tags($_POST['sihtkoht']));
        $lisainfo = htmlspecialchars(strip_tags($_POST['lisainfo']));
        $username = $this->session->userdata('logged_in')['username'];
        $sql = "SELECT id FROM kuvakasutajad WHERE kasutajanimi='$username'" ;
        $query = $this->db->query($sql);
        $autojuht = 0;
        //$autojuht = $query->result();

        $this->form_validation->set_rules('lahtekoht', 'Lähtekoht', 'required');
        $this->form_validation->set_rules('sihtkoht', 'Sihtkoht', 'required');
        $this->form_validation->set_rules('lisainfo', 'Lisainfo', 'required');

        foreach ($query->result_array() as $row)
        {
            $autojuht = $row['ID'];
        }

        if ($this->form_validation->run() == TRUE && $this->db->query("CALL lisasoit('$lahtekoht', '$sihtkoht', '$autojuht', '$lisainfo')"))
        {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">'.$this->lang->line("lisamine_onnestus").'</div>');
            //redirect('soidud', 'refresh');
        }
        else
        {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">'.$this->lang->line("lisamine_ebaonnestus").'</div>');
            //redirect('soidud', 'refresh');
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

    public function kustutasoit() {

        $this->load->database();
        $sihtkoht = $_POST['sihtkoht'];
        $lahtekoht = $_POST['lahtekoht'];
        $lisainfo = $_POST['lisainfo'];
        $autojuht = $_POST['autojuht'];
        $aeg = $_POST['aeg'];
        $this->db->query("CALL kustutasoit('$sihtkoht', '$lahtekoht', '$lisainfo')");
        header('refresh: 1');
    }

    public function liitusoiduga() {
        $this->load->database();
        $this->load->helper('url');
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
        $sihtkoht = $_POST['sihtkoht'];
        $lahtekoht = $_POST['lahtekoht'];
        $lisainfo = $_POST['lisainfo'];
        $notdupe = true;
        $sql = "SELECT reisijad FROM kuvareisijad WHERE sihtkoht ='$sihtkoht' AND lahtekoht = '$lahtekoht' AND lisainfo = '$lisainfo'";
        $reisijad = $this->db->query($sql);
        //$reisijadarray = array();
        $userid = $this->session->userdata('logged_in')['ID'];
        if ($reisijad->num_rows() > 0) {
            $row = $reisijad->row();
            $reisijadresult = $row->Reisijad;
            $reisijadarray = unserialize($reisijadresult);
            if (!is_array($reisijadarray)) $reisijadarray = array();
            foreach ($reisijadarray as $val) {
                if ($val == $userid) $notdupe = false;
            }
        }
        if ($notdupe) {
            $reisijadarray[] = $userid;
            //array_push($reisijadarray, $userid);
            $reisijadsisse = serialize($reisijadarray);
            if ($this->db->query("CALL liitusoiduga('$sihtkoht', '$lahtekoht', '$lisainfo', '$reisijadsisse')")) {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center"> '.$this->lang->line("liitusid_soit").'</div>');
                //redirect('soidud', 'refresh');
            } else {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">'.$this->lang->line("liitusid_ebaonnestus").'</div>');
                //redirect('soidud', 'refresh');
            }
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">'.$this->lang->line("liitusid_jubaliitunud").'</div>');
            //redirect('soidud', 'refresh');
        }
    }

    public function lahkusoidust() {
        $this->load->database();
        $this->load->helper('url');
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
        $sihtkoht = $_POST['sihtkoht'];
        $lahtekoht = $_POST['lahtekoht'];
        $lisainfo = $_POST['lisainfo'];
        $sql = "SELECT reisijad FROM kuvareisijad WHERE sihtkoht ='$sihtkoht' AND lahtekoht = '$lahtekoht' AND lisainfo = '$lisainfo'";
        $reisijad = $this->db->query($sql);
        $userid = $this->session->userdata('logged_in')['ID'];
        $reisijadarray2 = array();
        if ($reisijad->num_rows() > 0) {
            $row = $reisijad->row();
            $reisijadresult = $row->Reisijad;
            $reisijadarray = unserialize($reisijadresult);

            foreach ($reisijadarray as $val) {
                if ($val != $userid) $reisijadarray2[] = $val;
            }
        }
        $reisijadsisse = serialize($reisijadarray2);
        if ($this->db->query("CALL liitusoiduga('$sihtkoht', '$lahtekoht', '$lisainfo', '$reisijadsisse')")) {
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">'.$this->lang->line("lahkusid_soit").'</div>');
            //redirect('soidud', 'refresh');
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">'.$this->lang->line("lahkusid_ebaonnestus").'</div>');
            //redirect('soidud', 'refresh');
        }

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