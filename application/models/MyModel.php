<?php

class MyModel extends CI_Model
{
    public function add($tabel, $data)
    {
        # code...
        $this->db->insert($tabel, $data);
        return $this->db->affected_rows();
    }

    public function edit($tabel, $data, $whereClause)
    {
        # code...
        $this->db->update($tabel, $data, $whereClause);
        return $this->db->affected_rows();
    }

    public function get($tabel, $whereClause = null, $row = false)
    {
        # code...
        if ($whereClause == null) {
            return $this->db->get($tabel)->result_array();
        } else {
            if ($row == false) {
                return $this->db->get_where($tabel, $whereClause)->result_array();
            } else {
                return $this->db->get_where($tabel, $whereClause)->row_array();
            }
        }
    }

    public function trash($tabel, $whereClause)
    {
        # code...
        $this->db->delete($tabel, $whereClause);
        return $this->db->affected_rows();
    }

    public function nomorRekamMedis()
    {
        # code...
        $this->db->select_max('nrm');
        $data = $this->db->get('pasien')->row_array();
        $kodeNRM = $data['nrm'];
        $urutan = (int) substr($kodeNRM, 4, 3);
        $urutan++;
        $huruf = "NRM-";
        $nrm = $huruf . sprintf("%03s", $urutan);
        return $nrm;
    }

    // public function get_month($tabel, $whereClause)
    // {
    //     # code...
    //     $this->db->select()
    // }

}
