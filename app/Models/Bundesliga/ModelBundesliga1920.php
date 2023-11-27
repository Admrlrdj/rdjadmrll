<?php

namespace App\Models\Bundesliga;

use CodeIgniter\Model;

class ModelBundesliga1920 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('bundesliga1920');
        $db->select('bundesliga1920.id_bundesliga1920');
        $db->select('bundesliga1920.id_club');
        $db->select('bundesliga1920.play');
        $db->select('bundesliga1920.win');
        $db->select('bundesliga1920.draw');
        $db->select('bundesliga1920.lose');
        $db->select('bundesliga1920.goal_in');
        $db->select('bundesliga1920.goal_out');
        $db->select('bundesliga1920.goal_diff');
        $db->select('bundesliga1920.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = bundesliga1920.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('bundesliga1920');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('bundesliga1920');
        return $db->where('id_bundesliga1920', $data['id_bundesliga1920'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('bundesliga1920');
        return $db->where('id_bundesliga1920', $data['id_bundesliga1920'])->delete($data);
    }
}
