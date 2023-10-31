<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCountry extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('country');
        return $db->get()->getResultArray();
    }
    public function InsertData($data)
    {
        $db = $this->db->table('country');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('country');
        return $db->where('id_country', $data['id_country'])->update($data);
    }
    public function DeleteData($data)
    {
        $db = $this->db->table('country');
        return $db->where('id_country', $data['id_country'])->delete($data);
    }
}
