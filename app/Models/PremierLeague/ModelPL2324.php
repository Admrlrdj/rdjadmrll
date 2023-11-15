<?php

namespace App\Models\PremierLeague;

use CodeIgniter\Model;

class ModelPL2324 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('pl2324');
        $db->select('pl2324.id_pl2324');
        $db->select('pl2324.id_club');
        $db->select('pl2324.play');
        $db->select('pl2324.win');
        $db->select('pl2324.draw');
        $db->select('pl2324.lose');
        $db->select('pl2324.goal_in');
        $db->select('pl2324.goal_out');
        $db->select('pl2324.goal_diff');
        $db->select('pl2324.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = pl2324.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('pl2324');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('pl2324');
        return $db->where('id_pl2324', $data['id_pl2324'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('pl2324');
        return $db->where('id_pl2324', $data['id_pl2324'])->delete($data);
    }
}
