<?php

namespace App\Models\PremierLeague;

use CodeIgniter\Model;

class ModelPremierLeague1920 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('pl1920');
        $db->select('pl1920.id_pl1920');
        $db->select('pl1920.id_club');
        $db->select('pl1920.play');
        $db->select('pl1920.win');
        $db->select('pl1920.draw');
        $db->select('pl1920.lose');
        $db->select('pl1920.goal_in');
        $db->select('pl1920.goal_out');
        $db->select('pl1920.goal_diff');
        $db->select('pl1920.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = pl1920.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('pl1920');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('pl1920');
        return $db->where('id_pl1920', $data['id_pl1920'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('pl1920');
        return $db->where('id_pl1920', $data['id_pl1920'])->delete($data);
    }
}
