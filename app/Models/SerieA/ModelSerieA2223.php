<?php

namespace App\Models\SerieA;

use CodeIgniter\Model;

class ModelSerieA2223 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('seriea2223');
        $db->select('seriea2223.id_seriea2223');
        $db->select('seriea2223.id_club');
        $db->select('seriea2223.play');
        $db->select('seriea2223.win');
        $db->select('seriea2223.draw');
        $db->select('seriea2223.lose');
        $db->select('seriea2223.goal_in');
        $db->select('seriea2223.goal_out');
        $db->select('seriea2223.goal_diff');
        $db->select('seriea2223.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = seriea2223.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('seriea2223');
        return $db->insert($data);
    }

    public function UpdateData($data)
    {
        $db = $this->db->table('seriea2223');
        return $db->where('id_seriea2223', $data['id_seriea2223'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('seriea2223');
        return $db->where('id_seriea2223', $data['id_seriea2223'])->delete($data);
    }
}
