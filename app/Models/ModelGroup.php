<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelGroup extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('group');
        return $db->get()->getResultArray();
    }
    public function InsertData($data)
    {
        $db = $this->db->table('group');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('group');
        return $db->where('id_group', $data['id_group'])->update($data);
    }
    public function DeleteData($data)
    {
        $db = $this->db->table('group');
        return $db->where('id_group', $data['id_group'])->delete($data);
    }
}
