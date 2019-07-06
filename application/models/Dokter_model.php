<?php

class Dokter_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function addDokter()
    {
        $createdBy = $this->session->userdata('id');
        $dataDokter = array(
            'nama'      => $this->input->post('nama'),
            'sip'       => $this->input->post('sip'),
            'spesialis'       => $this->input->post('spesialis'),
            'created_by'        => $createdBy,
            'created_date'      => date("Y-m-d H:i:s")
        );
        $this->db->insert('dokter', $dataDokter);
        redirect(base_url('/dokter'));
    }

    public function getDokterListed()
    {
        $query = $this->db->query("select * from dokter order by id asc");
        $data = array();
        foreach ($query->result() as $row)
        {
            $dataDokter = array(
                $row->nama,
                $row->sip,
                $row->spesialis,
                '<button type="button" class="btn btn-primary" style="margin-right:10px;" onclick="modalDokter('.$row->id.')" >Detail</button>'.'<button type="button" class="btn btn-danger" onclick="editDokter('.$row->id.')" >edit</button>'
            );
            array_push($data, $dataDokter);
        }
        echo json_encode($data);
    }

    public function getDokterById()
    {
        $dokterId = $this->input->post('id');
        $query = $this->db->get_where('dokter', array('id' => $dokterId));
        echo json_encode($query->result());
    }

    public function delete()
    {
        $this->db->delete('dokter', array('id' => $this->input->post('id')));
        echo "berhasil";
    }

    public function edit()
    {
        $data = array('nama'=>$this->input->post('nama'),'sip'=>$this->input->post('sip'),'spesialis'=>$this->input->post('spesialis'));
        var_dump($data);
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('dokter',$data);
        echo "berhasil";
    }

    public function getDokterAll()
    {
        $query = $this->db->get('dokter')->result();
        return $query;
    }

}
