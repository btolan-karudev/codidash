<?php
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/home
     *    - or -
     *        http://example.com/index.php/home/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/home/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('home/inc/header_view');
        $this->load->view('home/home_view');
        $this->load->view('home/inc/footer_view');
    }

    public function code() {
//       $passEncrypt = $this->load->library('encrypt');
        $str = 'hello123';

        $passEncrypt = password_hash( $str, PASSWORD_DEFAULT);
        echo $passEncrypt."<br>";


        $hash = '$2y$10$uTIwdGaaovVNUsdBqHlZ8.tIHiWCRPHTd4TbV307XqIcUAG8Oq742';

        if (password_verify('hello123', $hash)) {
            echo 'Password is valid!';
        } else {
            echo 'Invalid password.';
        }
    }

//    public function test()
//    {
//        $this->db   ->select('user_id, login')
//                    ->order_by('user_id DESC');
//        $q = $this->db->get('user');
//        print_r($q->result());

//        $data = [
//            'login' => 'Jenkins',
//        ];
//        $this->db->insert('user', $data);


//        $data = [
//            'login' => 'Sammsoon',
//        ];
//        $this->db->where(['user_id' => 4]);
//        $this->db->update('user', $data);


//        $this->db->delete('user', ['user_id' => 1]);

//    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */