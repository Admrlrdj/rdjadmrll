<?php

namespace App\Models\LaLiga;

use CodeIgniter\Model;

class ModelLaLiga2324 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('laliga2324');
        $db->select('laliga2324.id_laliga2324');
        $db->select('laliga2324.id_club');
        $db->select('laliga2324.play');
        $db->select('laliga2324.win');
        $db->select('laliga2324.draw');
        $db->select('laliga2324.lose');
        $db->select('laliga2324.goal_in');
        $db->select('laliga2324.goal_out');
        $db->select('laliga2324.goal_diff');
        $db->select('laliga2324.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = laliga2324.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('laliga2324');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('laliga2324');
        return $db->where('id_laliga2324', $data['id_laliga2324'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('laliga2324');
        return $db->where('id_laliga2324', $data['id_laliga2324'])->delete($data);
    }
}
