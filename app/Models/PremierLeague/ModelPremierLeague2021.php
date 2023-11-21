<?php

namespace App\Models\PremierLeague;

use CodeIgniter\Model;

class ModelPremierLeague2021 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('pl2021');
        $db->select('pl2021.id_pl2021');
        $db->select('pl2021.id_club');
        $db->select('pl2021.play');
        $db->select('pl2021.win');
        $db->select('pl2021.draw');
        $db->select('pl2021.lose');
        $db->select('pl2021.goal_in');
        $db->select('pl2021.goal_out');
        $db->select('pl2021.goal_diff');
        $db->select('pl2021.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = pl2021.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('pl2021');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('pl2021');
        return $db->where('id_pl2021', $data['id_pl2021'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('pl2021');
        return $db->where('id_pl2021', $data['id_pl2021'])->delete($data);
    }
}
