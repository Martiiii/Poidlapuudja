<?php
Class User extends CI_Model
{
    function login($username, $password)
    {
        $this -> db -> select('id, kasutajanimi, parool');
        $this -> db -> from('kuvakasutajad');
        $this -> db -> where('kasutajanimi', $username);
        $this -> db -> where('parool', MD5($password));
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
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