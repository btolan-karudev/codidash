<?php


class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }


    public function test_get()
    {
        $data = $this->user_model->get(9);

        print_r($data);

        $this->output->enable_profiler(true);
    }

    public function test_insert()
    {
        $data = [
            'login' => 'Jettro'
        ];

        $result = $this->user_model->insert($data);

        print_r($result);
    }

    public function test_update()
    {
        $data = [
            'login' => 'Peggy'
        ];

        $result = $this->user_model->update($data, 7);

        print_r($result);
    }

    public function test_delete($user_id)
    {
        $result = $this->user_model->delete($user_id);

        print_r($result);
    }

}