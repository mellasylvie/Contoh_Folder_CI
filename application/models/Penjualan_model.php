<?php
class Penjualan_model extends CI_Model
{
    public function ambil_barang()
    {
        return $this->db->get("barang")->result_array();
    }
}
