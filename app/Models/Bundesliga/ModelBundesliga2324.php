<?php

namespace App\Models\Bundesliga;

use CodeIgniter\Model;

class ModelBundesliga2324 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('bundesliga2324');
        $db->select('bundesliga2324.id_bundesliga2324');
        $db->select('bundesliga2324.id_club');
        $db->select('bundesliga2324.play');
        $db->select('bundesliga2324.win');
        $db->select('bundesliga2324.draw');
        $db->select('bundesliga2324.lose');
        $db->select('bundesliga2324.goal_in');
        $db->select('bundesliga2324.goal_out');
        $db->select('bundesliga2324.goal_diff');
        $db->select('bundesliga2324.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = bundesliga2324.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('bundesliga2324');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('bundesliga2324');
        return $db->where('id_bundesliga2324', $data['id_bundesliga2324'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('bundesliga2324');
        return $db->where('id_bundesliga2324', $data['id_bundesliga2324'])->delete($data);
    }
}
