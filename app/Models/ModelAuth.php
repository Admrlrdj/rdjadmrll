<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function AllData()
    {
        $db = $this->db->table('user');
        return $db->get()->getResultArray();
    }

    public function ValidRegister($data)
    {
        $db = $this->db->table('user');
        return $db->insert($data);
    }

    public function ValidLogin($username, $password)
    {
        $db = $this->db->table('user');
        return $db->where([
            'username' => $username,
            'password' => $password,
        ])->get()->getRowArray();
    }
}
