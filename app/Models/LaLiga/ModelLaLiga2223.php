<?php

namespace App\Models\LaLiga;

use CodeIgniter\Model;

class ModelLaLiga2223 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('laliga2223');
        $db->select('laliga2223.id_laliga2223');
        $db->select('laliga2223.id_club');
        $db->select('laliga2223.play');
        $db->select('laliga2223.win');
        $db->select('laliga2223.draw');
        $db->select('laliga2223.lose');
        $db->select('laliga2223.goal_in');
        $db->select('laliga2223.goal_out');
        $db->select('laliga2223.goal_diff');
        $db->select('laliga2223.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = laliga2223.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('laliga2223');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('laliga2223');
        return $db->where('id_laliga2223', $data['id_laliga2223'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('laliga2223');
        return $db->where('id_laliga2223', $data['id_laliga2223'])->delete($data);
    }
}
