<?php

namespace App\Models\Bundesliga;

use CodeIgniter\Model;

class ModelBundesliga2223 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('bundesliga2223');
        $db->select('bundesliga2223.id_bundesliga2223');
        $db->select('bundesliga2223.id_club');
        $db->select('bundesliga2223.play');
        $db->select('bundesliga2223.win');
        $db->select('bundesliga2223.draw');
        $db->select('bundesliga2223.lose');
        $db->select('bundesliga2223.goal_in');
        $db->select('bundesliga2223.goal_out');
        $db->select('bundesliga2223.goal_diff');
        $db->select('bundesliga2223.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = bundesliga2223.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('bundesliga2223');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('bundesliga2223');
        return $db->where('id_bundesliga2223', $data['id_bundesliga2223'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('bundesliga2223');
        return $db->where('id_bundesliga2223', $data['id_bundesliga2223'])->delete($data);
    }
}
