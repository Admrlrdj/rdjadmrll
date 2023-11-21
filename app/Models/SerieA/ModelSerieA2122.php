<?php

namespace App\Models\SerieA;

use CodeIgniter\Model;

class ModelSerieA2122 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('seriea2122');
        $db->select('seriea2122.id_seriea2122');
        $db->select('seriea2122.id_club');
        $db->select('seriea2122.play');
        $db->select('seriea2122.win');
        $db->select('seriea2122.draw');
        $db->select('seriea2122.lose');
        $db->select('seriea2122.goal_in');
        $db->select('seriea2122.goal_out');
        $db->select('seriea2122.goal_diff');
        $db->select('seriea2122.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = seriea2122.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('seriea2122');
        return $db->insert($data);
    }

    public function UpdateData($data)
    {
        $db = $this->db->table('seriea2122');
        return $db->where('id_seriea2122', $data['id_seriea2122'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('seriea2122');
        return $db->where('id_seriea2122', $data['id_seriea2122'])->delete($data);
    }
}
