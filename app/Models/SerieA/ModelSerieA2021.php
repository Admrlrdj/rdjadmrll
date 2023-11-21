<?php

namespace App\Models\SerieA;

use CodeIgniter\Model;

class ModelSerieA2021 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('seriea2021');
        $db->select('seriea2021.id_seriea2021');
        $db->select('seriea2021.id_club');
        $db->select('seriea2021.play');
        $db->select('seriea2021.win');
        $db->select('seriea2021.draw');
        $db->select('seriea2021.lose');
        $db->select('seriea2021.goal_in');
        $db->select('seriea2021.goal_out');
        $db->select('seriea2021.goal_diff');
        $db->select('seriea2021.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = seriea2021.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('seriea2021');
        return $db->insert($data);
    }

    public function UpdateData($data)
    {
        $db = $this->db->table('seriea2021');
        return $db->where('id_seriea2021', $data['id_seriea2021'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('seriea2021');
        return $db->where('id_seriea2021', $data['id_seriea2021'])->delete($data);
    }
}
