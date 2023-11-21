<?php

namespace App\Models\LaLiga;

use CodeIgniter\Model;

class ModelLaLiga1920 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('laliga1920');
        $db->select('laliga1920.id_laliga1920');
        $db->select('laliga1920.id_club');
        $db->select('laliga1920.play');
        $db->select('laliga1920.win');
        $db->select('laliga1920.draw');
        $db->select('laliga1920.lose');
        $db->select('laliga1920.goal_in');
        $db->select('laliga1920.goal_out');
        $db->select('laliga1920.goal_diff');
        $db->select('laliga1920.points');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->join('club', 'club.id_club = laliga1920.id_club', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('laliga1920');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('laliga1920');
        return $db->where('id_laliga1920', $data['id_laliga1920'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('laliga1920');
        return $db->where('id_laliga1920', $data['id_laliga1920'])->delete($data);
    }
}
