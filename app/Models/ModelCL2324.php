<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCL2324 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('cl2324');
        $db->select('cl2324.id_cl2324');
        $db->select('cl2324.id_club');
        $db->select('cl2324.id_group');
        $db->select('cl2324.id_ro16');
        $db->select('cl2324.id_qf');
        $db->select('cl2324.id_sf');
        $db->select('cl2324.id_final');
        $db->select('cl2324.score_ro16');
        $db->select('cl2324.score_qf');
        $db->select('cl2324.score_sf');
        $db->select('cl2324.score_final');
        $db->select('cl2324.play');
        $db->select('cl2324.win');
        $db->select('cl2324.draw');
        $db->select('cl2324.lose');
        $db->select('cl2324.goal_in');
        $db->select('cl2324.goal_out');
        $db->select('cl2324.goal_diff');
        $db->select('cl2324.points');
        $db->select('cl2324.group_rank');
        $db->select('club.id_club');
        $db->select('club.name_club');
        $db->select('group.id_group');
        $db->select('group.code_group');
        $db->select('ro16.id_ro16');
        $db->select('ro16.code_ro16');
        $db->select('qf.id_qf');
        $db->select('qf.code_qf');
        $db->select('sf.id_sf');
        $db->select('sf.code_sf');
        $db->select('final.id_final');
        $db->select('final.code_final');
        $db->join('club', 'club.id_club = cl2324.id_club', 'left');
        $db->join('group', 'group.id_group = cl2324.id_group', 'left');
        $db->join('ro16', 'ro16.id_ro16 = cl2324.id_ro16', 'left');
        $db->join('qf', 'qf.id_qf = cl2324.id_qf', 'left');
        $db->join('sf', 'sf.id_sf = cl2324.id_sf', 'left');
        $db->join('final', 'final.id_final = cl2324.id_final', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('cl2324');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('cl2324');
        return $db->where('id_cl2324', $data['id_cl2324'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('cl2324');
        return $db->where('id_cl2324', $data['id_cl2324'])->delete($data);
    }
}
