<?php

class User_model extends CI_Model
{
    /**
     *
     * @usage
     * All:    $this->user_model->get();
     * Single: $this->user_model->get(2);
     *
     * @return array
     */
    public function get($user_id = null)
    {
        if ($user_id === null) {
            $q = $this->db->get('user');
        } else {
            $q = $this->db->get_where('user', ['user_id' => $user_id]);
        }

        return $q->result_array();
    }

    /**
     * @param array $data
     *
     * $usage $result = $this->user_model->insert($data);
     *
     * @return int
     */
    public function insert($data)
    {
        $this->db->insert('user', $data);

        return $this->db->insert_id();
    }

    /**
     * @usage $this->user_model->update($data, 7);
     */
    public function update($data, $user_id)
    {
        $this->db
            ->where(['user_id' => $user_id])
            ->update('user', $data);

        return $this->db->affected_rows();
    }

    /**
     * @usage $this->user_model->delete(3);
     */
    public function delete($user_id)
    {
        $this->db->delete('user', ['user_id' => $user_id]);

        return $this->db->affected_rows();
    }
}