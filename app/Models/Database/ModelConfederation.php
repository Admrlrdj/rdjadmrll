<?php

namespace App\Models\Database;

use CodeIgniter\Model;

class ModelConfederation extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('confederation');
        return $db->get()->getResultArray();
    }
    public function InsertData($data)
    {
        $db = $this->db->table('confederation');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('confederation');
        return $db->where('id_confederation', $data['id_confederation'])->update($data);
    }
    public function DeleteData($data)
    {
        $db = $this->db->table('confederation');
        return $db->where('id_confederation', $data['id_confederation'])->delete($data);
    }
}
