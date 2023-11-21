<?php

namespace App\Models\SerieA;

use CodeIgniter\Model;

class ModelSerieA1920 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('seriea1920');
        $db->select('seriea1920.id_seriea1920');
        $db->select('seriea1920.id_club');
        $db->select('seriea1920.play');
        $db->select('seriea1920.win');
        $db->select('seriea1920.draw');
        $db->select('seriea1920.lose');
        $db->select('seriea1920.goal_in');
        $db->select('seriea1920.goal_out');
        $db->select('seriea1920.goal_diff');
        $db->select('seriea1920.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = seriea1920.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('seriea1920');
        return $db->insert($data);
    }

    public function UpdateData($data)
    {
        $db = $this->db->table('seriea1920');
        return $db->where('id_seriea1920', $data['id_seriea1920'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('seriea1920');
        return $db->where('id_seriea1920', $data['id_seriea1920'])->delete($data);
    }
}
