<?php
class Badge_Model extends CI_Model 
{
    function displaygardenbadge($username)
	{
		$query=$this->db->query("select * from users where username='".$username."'");
	return $query->result();
	}
    function updategardenbadge($username)
	{
		//update garden badge number
		$this->db->set('garden_number', 'garden_number+1', FALSE);
		$this->db->where('username', $username);
		$this->db->update('users');
		$this->db->set('totalbadge', 'totalbadge+1', FALSE);
		$this->db->where('username', $username);
		$this->db->update('users');
		
	}
	function updatewaterbadge($username)
	{
		//update water badge
		$this->db->set('water_number', 'water_number+1', FALSE);
		$this->db->where('username', $username);
		$this->db->update('users');
		$this->db->set('totalbadge', 'totalbadge+1', FALSE);
		$this->db->where('username', $username);
		$this->db->update('users');
	}
	function updateforestbadge($username)
	{
		//$query=$this->db->get("select garden_number from badge where username='".$username."'")->row();
	    //$number = $query +1;
		$this->db->set('forest_number', 'forest_number+1', FALSE);
		$this->db->where('username', $username);
		$this->db->update('users');
		$this->db->set('totalbadge', 'totalbadge+1', FALSE);
		$this->db->where('username', $username);
		$this->db->update('users');
	}

	function counttotalbadge($username) {
		$this->db->set('totalbadge', 'garden_number + water_number + forest_number', FALSE);
		$this->db->where('username', $username);
		$this->db->update('users');
	}
}