<?php

class m_data extends CI_Model
{
    function ambil_data_user()
    {

        return $this->db->get('user');
    }

    function ambil_data_materi()
    {

        return $this->db->get('materi')->result_array();
    }

    function materi_satu()
    {

        return $this->db->get_where('materi', ['kelas' => 1])->result_array();
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function hapus_data($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }

    function edit_data($id)
    {
        $this->db->select('*');
        $this->db->from('materi');
        $this->db->where('id', $id);

        return $this->db->get()->result_array();
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
