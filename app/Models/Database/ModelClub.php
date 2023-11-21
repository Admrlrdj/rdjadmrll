<?php

namespace App\Models\Database;

use CodeIgniter\Model;

class ModelClub extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('club');
        $db->select('club.id_club');
        $db->select('club.id_country');
        $db->select('club.id_confederation');
        $db->select('club.name_club');
        $db->select('club.code_club');
        $db->select('country.id_country');
        $db->select('country.id_confederation');
        $db->select('country.name_country');
        $db->select('country.code_country');
        $db->select('confederation.id_confederation');
        $db->select('confederation.name_confederation');
        $db->select('confederation.code_confederation');
        $db->join('country', 'country.id_country = club.id_country', 'left');
        $db->join('confederation', 'confederation.id_confederation = club.id_confederation', 'left');
        return $db->get()->getResultArray();
    }
    public function InsertData($data)
    {
        $db = $this->db->table('club');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('club');
        return $db->where('id_club', $data['id_club'])->update($data);
    }
    public function DeleteData($data)
    {
        $db = $this->db->table('club');
        return $db->where('id_club', $data['id_club'])->delete($data);
    }
}
