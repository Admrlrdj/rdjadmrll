<?php

namespace App\Models\SerieA;

use CodeIgniter\Model;

class ModelSerieA2324 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('seriea2324');
        $db->select('seriea2324.id_seriea2324');
        $db->select('seriea2324.id_club');
        $db->select('seriea2324.play');
        $db->select('seriea2324.win');
        $db->select('seriea2324.draw');
        $db->select('seriea2324.lose');
        $db->select('seriea2324.goal_in');
        $db->select('seriea2324.goal_out');
        $db->select('seriea2324.goal_diff');
        $db->select('seriea2324.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = seriea2324.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('seriea2324');
        return $db->insert($data);
    }

    public function UpdateData($data)
    {
        $db = $this->db->table('seriea2324');
        return $db->where('id_seriea2324', $data['id_seriea2324'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('seriea2324');
        return $db->where('id_seriea2324', $data['id_seriea2324'])->delete($data);
    }
}
