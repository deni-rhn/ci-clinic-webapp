<?php

class Rujukan_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }


    public function insertRujukan()
    {
        $createdBy = $this->session->userdata('id');
        $dataRujukan = array(
            'yth'               => $this->input->post('yth'),
            'tempat'            => $this->input->post('tempat'),
            'nama'              => $this->input->post('nama-pasien'),
            'jenis_kelamin'     => $this->input->post('kelamin'),
            'umur'              => $this->input->post('umur'),
            'alamat'            => $this->input->post('alamat'),
            'diagnosa'          => $this->input->post('diagnosa'),
            'tindakan'          => $this->input->post('tindakan'),
            'permohonan'        => $this->input->post('permohonan'),
            'tambahan'          => $this->input->post('catatan-tambahan'),
            'catatan'           => $this->input->post('catatan'),
            'validasi'          => $this->input->post('validasi'),
            'dokter_pemeriksa'  => $this->input->post('dokter'),
            'sip_dokter'        => $this->input->post('sip-dokter'),
            'created_by'        => $createdBy,
            'created_date'      => date("Y-m-d H:i:s"),
            'nomorRujukan'      => $this->input->post('nomorRujukan'),
            'keteranganRujukan' => $this->input->post('keterangan'),
            'rsRujukan'         => $this->input->post('rsRujukan')
        );
        $this->db->insert('rujukan', $dataRujukan);
        redirect('/rujukan');
    }

    public function getRujukanPasien()
    {
        $query = $this->db->get('rujukan');
        $data = array();
        $no = 1;

        foreach ($query->result() as $row)
        {
            $array = array(
                $no++,
                $row->nama,
                $row->jenis_kelamin,
                $row->umur,
                $row->alamat,
                $row->diagnosa,
                $row->tindakan,
                '<button type="button" class="btn btn-info" onclick="detail('.$row->id.')" >Detail</button>'
            );
            array_push($data, $array);
        }
        echo json_encode($data);
    }

    public function getRujukanById()
    {
        $id = $this->input->post('id');
        $query = $this->db->get_where('rujukan', array('id' => $id ));
        echo json_encode($query->result());
    }


}
