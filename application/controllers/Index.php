<?php
 
/**
 * Created by PhpStorm.
 * User: Marti
 * Date: 19.02.2016
 * Time: 17:44
 */

class Index extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->library('encrypt');
        $this->load->driver('session');
        $this->session->set_userdata('id', 234);
        $this->session->set_userdata('language', 'estonian');
        $this->session->set_userdata('languageloc', 'est_lang.php');
}

    public function pealeht($languageloc = 'est_lang.php', $language = 'estonian') {
        $this->load->database();

        $language = $this->session->userdata('language');
        $languageloc = $this->session->userdata('languageloc');
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

 
    public function soidud($languageloc = 'est_lang.php', $language = 'estonian') {
        $this->load->database();

        $language = $this->session->userdata('language');
        $languageloc = $this->session->userdata('languageloc');
        $this->lang->load($languageloc, $language);
        $this->load->helper('url');
        $sql = "SELECT * FROM kuvasoidud" ;
    $query = $this->db->query($sql);
    $data['uudistekogu'] = $query->result();
    $this->load->view('soidud', $data);
    }
 
    public function kasutajad($languageloc = 'est_lang.php', $language = 'estonian') {
        $this->load->database();

        $language = $this->session->userdata('language');
        $languageloc = $this->session->userdata('languageloc');
        $this->lang->load($languageloc, $language);
        $this->load->helper('url');
        $sql = "SELECT * FROM kuvakasutajad ORDER BY Liitumine ASC";
    $query = $this->db->query($sql);
    $data['kasutajad'] = $query->result();
    $this->load->view('kasutajad', $data);
 
    }
 
    public function minusoidud($languageloc = 'est_lang.php', $language = 'estonian') {
        $this->load->database();

        $language = $this->session->userdata('language');
        $languageloc = $this->session->userdata('languageloc');
        $this->lang->load($languageloc, $language);
        $this->load->helper('url');
        $sql = "SELECT * FROM kuvasoidud";
    $query = $this->db->query($sql);
    $data['uudistekogu'] = $query->result();
    $this->load->view('minusoidud', $data);
 
    }
 
    public function lisauudis() {
    $this->load->database();
    $eesnimi = $_POST['eesnimi'];
    $perenimi = $_POST['perenimi'];
        $email = $_POST['email'];
        $telefoninumber = $_POST['telnr'];
        $parool = $_POST['parool'];
    $this->db->query("CALL lisakasutaja('$eesnimi', '$perenimi', '$email', '$parool', '$telefoninumber')");
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

        $language = $this->session->userdata('language');
        $languageloc = $this->session->userdata('languageloc');
        $this->lang->load($languageloc, $language);
        $this->load->view('lehekaart');

    }
    public function change_lang() {


        $this->session->set_userdata('language', 'english');
        $this->session->set_userdata('languageloc', 'eng_lang.php');


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

    }
 
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