<?php

namespace App\Models\Info;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('user');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('user');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('user');
        return $db->where('id_user', $data['id_user'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('user');
        return $db->where('id_user', $data['id_user'])->delete($data);
    }
}
