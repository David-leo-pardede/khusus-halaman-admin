<?php

class M_mahasiswa extends CI_Model
{
    public function Semuadatamahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }
}
