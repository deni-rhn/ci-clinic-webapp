<?php

class Auth_model extends CI_Model {

    public $nameoremail;
    public $username;
    public $email;
    public $password;
    public $role_id;

    public function __construct(){
        $this->load->database();
    }


    /**
     *
     */
    public function login(){
        $nameoremail = $this->input->post('usroremail');
        $password = $this->input->post('password');

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username',$nameoremail);
        $this->db->or_where('email',$nameoremail);
        $cek = $this->db->get();

        //jika usernam/email ada
        if( !empty($cek->result()) ){

            foreach( $cek->result() as $usr ){
                //password benar
                if($usr->password == $password ){

                    $datausr = array(
                                        'id'        => $usr->id,
                                        'username'  => $usr->username,
                                        'role_id'   => $usr->role_id
                                    );

                   $this->session->set_userdata($datausr);
                   $akses = $this->session->userdata('role_id');

                   // logika redirect setelah login
                   $akses == 1 ? redirect(base_url('/pendaftaran/welcome_home')): redirect(base_url('/dash_dokter'));



                }else{
                    echo "email atau password salah";
                }
            }

        }else{
            //akun belum terdaftar
            echo "akun belum terdaftar";
        }


    }


    public function daftar(){
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $role_id = $this->input->post('role');

        $insert = array(
                          'username'    => $username,
                          'email'       => $email,
                          'password'    => $password,
                          'role_id'        => $role_id

                                );
        // var_dump($insert);
        $this->db->insert('user',$insert);
        redirect( base_url().'pendaftaran/register', 'refresh');

        // getdata
        // $this->db->select('*');
        // $this->db->from('user');
        // $this->db->having('username',$username);
        // $this->db->or_having('email',$email);
        // $queryada = $this->db->get();

        // if(empty($queryada->result())){
        //     $this->db->insert('user',$insert);
        //     redirect( base_url().'auth/daftar', 'refresh');
        // }else{
        //     foreach($queryada->result() as $row ){
        //        if($row->username == $username ){
        //            echo "<b>username terdaftar</b>";
        //        }elseif($row->email == $email ){
        //           echo "<b>email terdaftar</b>";
        //        }
        //     }

        // }
    }


    public function logout(){
        $this->session->sess_destroy();
		redirect(base_url('login'));
    }

    public function getUserAll()
    {
      $query = $this->db->get('user');
      return $query->result();
    }


}
