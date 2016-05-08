<?php
Class User extends CI_Model
{
    function login($username, $password)
    {
        $this->load->library('password');
        $this -> db -> select('id, kasutajanimi, parool');
        $this -> db -> from('kuvakasutajad');
        $this -> db -> where('kasutajanimi', $username);
        //$this -> db -> where('parool', $password);
        $this -> db -> limit(1);

        $query = $this -> db -> get();
        $row = $query->row();
        //echo $row;
        //echo $row['parool'];

        $array = array();
        foreach($query->result() as $row)
        {
            $array = array(
                'parool' => $row->Parool
            );

        }

        if (array_key_exists("parool",$array) && ($this->password->validate_password($password, $array['parool'])))
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
}
?>