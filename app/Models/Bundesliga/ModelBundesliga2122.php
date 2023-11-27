<?php

namespace App\Models\Bundesliga;

use CodeIgniter\Model;

class ModelBundesliga2122 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('bundesliga2122');
        $db->select('bundesliga2122.id_bundesliga2122');
        $db->select('bundesliga2122.id_club');
        $db->select('bundesliga2122.play');
        $db->select('bundesliga2122.win');
        $db->select('bundesliga2122.draw');
        $db->select('bundesliga2122.lose');
        $db->select('bundesliga2122.goal_in');
        $db->select('bundesliga2122.goal_out');
        $db->select('bundesliga2122.goal_diff');
        $db->select('bundesliga2122.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = bundesliga2122.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('bundesliga2122');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('bundesliga2122');
        return $db->where('id_bundesliga2122', $data['id_bundesliga2122'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('bundesliga2122');
        return $db->where('id_bundesliga2122', $data['id_bundesliga2122'])->delete($data);
    }
}
