<?php

/**
 * Created by PhpStorm.
 * User: Marti
 * Date: 19.02.2016
 * Time: 17:44
 */
class Index extends CI_Controller
{
    public function pealeht() {
        $this->load->database();
        // $sql = "mingiparing";
        // $query = $this->db->query($sql);
        // $data['minginimi'] = $query->result();
        $this->load->helper('url');
        $this->load->view('index');
    }

    public function soidud() {
        $this->load->database();
        $this->load->helper('url');
        $this->load->view('soidud');
    }

    public function kasutajad() {
        $this->load->database();
        $this->load->helper('url');
        $sql = "SELECT * FROM Users";
        $query = $this->db->query($sql);
        $data['kasutajad'] = $query->result();
        $this->load->view('kasutajad', $data);

    }

    public function minusoidud() {
        $this->load->database();
        $this->load->helper('url');
        $sql = "SELECT * FROM Users";
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
        $this->db->insert('Users', array('eesnimi' => $eesnimi, 'Perenimi' => $perenimi,
            'Email' => $email, 'Telefoninumber' => $telefoninumber, 'Parool' => $parool));
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