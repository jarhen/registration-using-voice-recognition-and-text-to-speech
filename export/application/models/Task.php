<?php

class Task extends CI_Model {
	public function __construct()
	{
		parent::__construct();

	}

	
	public function getgrade()
	{
          
            $query = $this->db->query("SELECT * FROM grade");
            return $query->result();
	}
}
	