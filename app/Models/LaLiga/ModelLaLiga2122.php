<?php

namespace App\Models\LaLiga;

use CodeIgniter\Model;

class ModelLaLiga2122 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('laliga2122');
        $db->select('laliga2122.id_laliga2122');
        $db->select('laliga2122.id_club');
        $db->select('laliga2122.play');
        $db->select('laliga2122.win');
        $db->select('laliga2122.draw');
        $db->select('laliga2122.lose');
        $db->select('laliga2122.goal_in');
        $db->select('laliga2122.goal_out');
        $db->select('laliga2122.goal_diff');
        $db->select('laliga2122.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = laliga2122.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('laliga2122');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('laliga2122');
        return $db->where('id_laliga2122', $data['id_laliga2122'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('laliga2122');
        return $db->where('id_laliga2122', $data['id_laliga2122'])->delete($data);
    }
}
