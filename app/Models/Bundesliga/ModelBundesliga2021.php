<?php

namespace App\Models\Bundesliga;

use CodeIgniter\Model;

class ModelBundesliga2021 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('bundesliga2021');
        $db->select('bundesliga2021.id_bundesliga2021');
        $db->select('bundesliga2021.id_club');
        $db->select('bundesliga2021.play');
        $db->select('bundesliga2021.win');
        $db->select('bundesliga2021.draw');
        $db->select('bundesliga2021.lose');
        $db->select('bundesliga2021.goal_in');
        $db->select('bundesliga2021.goal_out');
        $db->select('bundesliga2021.goal_diff');
        $db->select('bundesliga2021.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = bundesliga2021.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('bundesliga2021');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('bundesliga2021');
        return $db->where('id_bundesliga2021', $data['id_bundesliga2021'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('bundesliga2021');
        return $db->where('id_bundesliga2021', $data['id_bundesliga2021'])->delete($data);
    }
}
