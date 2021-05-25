<?php
class M_cud extends CI_Model
{
  private $table;
  public function simpan($table, $data)
  {
    $this->db->insert($table, $data);
    return $this->db->affected_rows();
  }

  public function update($table, $data, $keyField, $keyId)
  {
    $this->db->update($table, $data, "$keyField = $keyId");
    return $this->db->affected_rows();
  }

  public function hapus($table, $keyField, $keyId)
  {
    $this->db->delete($table, "$keyField = $keyId");
    return $this->db->affected_rows();
  }
}