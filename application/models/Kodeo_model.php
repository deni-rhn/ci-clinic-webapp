<?php

class Kodeo_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }


    public function todb()
    {
       $data_kode = array(
           'kode'               => $this->input->post('kode'),
           'nama_obat'          => $this->input->post('nama_obat'),
           'harga'              => $this->input->post('harga'),
           'stok'               => $this->input->post('stok'),
           'status_persediaan'  => $this->input->post('status')
       );

       $this->db->insert('kode_obat', $data_kode);

       redirect(base_url('/kodeobat/form'));

    }

    public function allobat(){
        $query = $this->db->get('kode_obat')->result();

        $arr = array();

        foreach($query as $ko ){
            $tb = array ("",
                        $ko->kode,
                        $ko->nama_obat,
                        $ko->harga,
                        $ko->stok,
                        $ko->status_persediaan,
                        '<button type="button" class="btn btn-info" onclick="showedit('.$ko->id.')" >Edit data</button>'
                    );
            array_push($arr,$tb);
        }

        echo json_encode($arr);

    }

    public function user_edit(){
        $id = $this->input->post('id');
        $query = $this->db->get_where('kode_obat',array('id'=>$id))->result();
        echo json_encode($query);
    }

    public function delete_obat(){
        $id = $this->input->post('id');
        $query = $this->db->delete('kode_obat',array('id'=>$id));
        echo 'berhasil';
    }

    public function push_edit(){
        $arr = array( 'kode'              => $this->input->post('kode'),
                      'nama_obat'         => $this->input->post('nama_obat'),
                      'zat_aktif'         => $this->input->post('zat_aktif'),
                      'harga'             => $this->input->post('harga'),
                      'stok'              => $this->input->post('stok'),
                      'status_persediaan' => $this->input->post('status_persediaan')
                    );

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kode_obat', $arr);
        echo "berhasil";
    }

}
