<?php

class db extends ci_model {


	public function getPosts(){
		$sql = "SELECT * FROM Users";    		
		$query = $this->db->query($sql);
		return $query->result();
	}
}

?>