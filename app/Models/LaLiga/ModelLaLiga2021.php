<?php

namespace App\Models\LaLiga;

use CodeIgniter\Model;

class ModelLaLiga2021 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('laliga2021');
        $db->select('laliga2021.id_laliga2021');
        $db->select('laliga2021.id_club');
        $db->select('laliga2021.play');
        $db->select('laliga2021.win');
        $db->select('laliga2021.draw');
        $db->select('laliga2021.lose');
        $db->select('laliga2021.goal_in');
        $db->select('laliga2021.goal_out');
        $db->select('laliga2021.goal_diff');
        $db->select('laliga2021.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = laliga2021.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('laliga2021');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('laliga2021');
        return $db->where('id_laliga2021', $data['id_laliga2021'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('laliga2021');
        return $db->where('id_laliga2021', $data['id_laliga2021'])->delete($data);
    }
}
