<?Php
Defined('BASEPATH') or exit('No Direct Script Access Allowed');
class DatabaseEsign extends CI_Model
{
    function GetPeta()
    {
        $Query = $this->db->get('location');
        return $Query->result();
    }
    function GetDataDokumenInskal()
    {
        $Query = $this->db->get('dokumen_inskal');
        return $Query->result();
    }
    function GetDataDokumenPoolbar()
    {
        $Query = $this->db->get('dokumen_poolbar');
        return $Query->result();
    }
    function InsertDataDokumenInskal($Data)
    {
        $this->db->insert('dokumen_inskal', $Data);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function InsertDataDokumenPoolbar($Data)
    {
        $this->db->insert('dokumen_poolbar', $Data);
    }
}
