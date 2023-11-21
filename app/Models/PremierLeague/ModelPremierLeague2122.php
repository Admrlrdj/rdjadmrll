<?php

namespace App\Models\PremierLeague;

use CodeIgniter\Model;

class ModelPremierLeague2122 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('pl2122');
        $db->select('pl2122.id_pl2122');
        $db->select('pl2122.id_club');
        $db->select('pl2122.play');
        $db->select('pl2122.win');
        $db->select('pl2122.draw');
        $db->select('pl2122.lose');
        $db->select('pl2122.goal_in');
        $db->select('pl2122.goal_out');
        $db->select('pl2122.goal_diff');
        $db->select('pl2122.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = pl2122.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('pl2122');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('pl2122');
        return $db->where('id_pl2122', $data['id_pl2122'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('pl2122');
        return $db->where('id_pl2122', $data['id_pl2122'])->delete($data);
    }
}
