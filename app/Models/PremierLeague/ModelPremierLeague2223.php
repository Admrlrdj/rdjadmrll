<?php

namespace App\Models\PremierLeague;

use CodeIgniter\Model;

class ModelPremierLeague2223 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('pl2223');
        $db->select('pl2223.id_pl2223');
        $db->select('pl2223.id_club');
        $db->select('pl2223.play');
        $db->select('pl2223.win');
        $db->select('pl2223.draw');
        $db->select('pl2223.lose');
        $db->select('pl2223.goal_in');
        $db->select('pl2223.goal_out');
        $db->select('pl2223.goal_diff');
        $db->select('pl2223.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = pl2223.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('pl2223');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('pl2223');
        return $db->where('id_pl2223', $data['id_pl2223'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('pl2223');
        return $db->where('id_pl2223', $data['id_pl2223'])->delete($data);
    }
}
