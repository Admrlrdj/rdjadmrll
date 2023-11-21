<?php

namespace App\Models\Database;

use CodeIgniter\Model;

class ModelCountry extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('country');
        $db->select('country.id_country');
        $db->select('country.id_confederation');
        $db->select('country.name_country');
        $db->select('country.code_country');
        $db->select('confederation.id_confederation');
        $db->select('confederation.name_confederation');
        $db->select('confederation.code_confederation');
        $db->join('confederation', 'confederation.id_confederation = country.id_confederation', 'left');
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
