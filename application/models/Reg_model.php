<?php
class Reg_model extends CI_model
{

    function reginsert($formarray)
    {
        $this->db->insert('registration',$formarray);
    }
    function show()
    {
        return $details=$this->db->get('registration')->result_array();
    }
}
?>