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
        $this->load->helper('url');
        $this->load->view('soidud');
    }

    public function kasutajad() {
        $this->load->helper('url');
        $this->load->view('kasutajad');
    }

    public function minusoidud() {
        $this->load->helper('url');
        $this->load->view('minusoidud');
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