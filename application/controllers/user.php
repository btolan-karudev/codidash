<?php


class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function get()
    {
        $data = $this->user_model->get(4);

        print_r($data);
    }

    public function insert()
    {
        $data = [
            'login' => 'Jettro'
        ];

        $result = $this->user_model->insert($data);

        print_r($result);
    }

    public function update()
    {
        $data = [
            'login' => 'Peggy'
        ];

        $result = $this->user_model->update($data, 7);

        print_r($result);
    }

    public function delete($user_id)
    {
        $result = $this->user_model->delete($user_id);

        print_r($result);
    }

}