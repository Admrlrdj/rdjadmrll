<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelWC22 extends Model
{
    protected $useTimestamps = true;
    public function AllData()
    {
        $db = $this->db->table('wc22');
        $db->select('wc22.id_wc22');
        $db->select('wc22.id_country');
        $db->select('wc22.id_group');
        $db->select('wc22.id_ro16');
        $db->select('wc22.id_qf');
        $db->select('wc22.id_sf');
        $db->select('wc22.id_final');
        $db->select('wc22.play');
        $db->select('wc22.win');
        $db->select('wc22.draw');
        $db->select('wc22.lose');
        $db->select('wc22.goal_in');
        $db->select('wc22.goal_out');
        $db->select('wc22.goal_diff');
        $db->select('wc22.points');
        $db->select('country.id_country');
        $db->select('country.name_country');
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
        $db->join('country', 'country.id_country = wc22.id_country', 'left');
        $db->join('group', 'group.id_group = wc22.id_group', 'left');
        $db->join('ro16', 'ro16.id_ro16 = wc22.id_ro16', 'left');
        $db->join('qf', 'qf.id_qf = wc22.id_qf', 'left');
        $db->join('sf', 'sf.id_sf = wc22.id_sf', 'left');
        $db->join('final', 'final.id_final = wc22.id_final', 'left');
        return $db->get()->getResultArray();
    }

    public function InsertData($data)
    {
        $db = $this->db->table('wc22');
        return $db->insert($data);
    }
    public function UpdateData($data)
    {
        $db = $this->db->table('wc22');
        return $db->where('id_wc22', $data['id_wc22'])->update($data);
    }

    public function DeleteData($data)
    {
        $db = $this->db->table('wc22');
        return $db->where('id_wc22', $data['id_wc22'])->delete($data);
    }
}
