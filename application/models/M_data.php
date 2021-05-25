<?php

class M_data extends CI_Model
{
    public function get($table)
    {
        $data = $this->db->get($table);
        return $data->result_array();
    }

    public function getMaxKonsumsi()
    {
    return $this->db->query("
        select * from tb_penjualan where penjualan_terjual=(select max(penjualan_terjual) from tb_penjualan WHERE 
        penjualan_jenis='Konsumsi')
        ");
    }

    public function getMinKonsumsi()
    {
    return $this->db->query("
        select * from tb_penjualan where penjualan_terjual=(select min(penjualan_terjual) from tb_penjualan WHERE 
        penjualan_jenis='Konsumsi')
        ");
    }

    public function getMaxPembersih()
    {
    return $this->db->query("
        select * from tb_penjualan where penjualan_terjual=(select max(penjualan_terjual) from tb_penjualan WHERE 
        penjualan_jenis='Pembersih')
        ");
    }
    
    public function getMinPembersih()
    {
    return $this->db->query("
        select * from tb_penjualan where penjualan_terjual=(select min(penjualan_terjual) from tb_penjualan WHERE 
        penjualan_jenis='Pembersih')
        ");
    }
}
