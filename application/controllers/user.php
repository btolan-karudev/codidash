<?php


class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function login()
    {
        $login = $this->input->post('login');
        $password = $this->input->post('password');

        $result = $this->user_model->get([
            'login' => $login,
            'password' => hash('sha256', $password . SALT)
        ]);

        $this->output->set_content_type('application_json');

        if ($result) {
            $this->session->set_userdata(['user_id' => $result[0]['user_id']]);
            $this->output->set_output(json_encode(['result' => 1]));
            return false;
        }

        $this->output->set_output(json_encode(['result' => 0]));

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