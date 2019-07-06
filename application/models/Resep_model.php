<?php

class Resep_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function getResep()
    {
        $id_p = $this->input->post("id_p");
        $this->db->select("*");
        $this->db->from("invoice");
        $this->db->where("invoice.id_pasien",$id_p);
        $query = $this->db->get()->result();

        echo json_encode($query);
    }


}