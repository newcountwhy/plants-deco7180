<?php
class Ranking_Model extends CI_Model 
{
    function ranking() {
        //get data in users, return desc result
        $query= $this->db->select('*')
        ->from('users')
        ->order_by('totalbadge', 'desc');
        return $query->get()->result();
     

    }

}
?>