<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKnockout extends Model
{
    protected $useTimestamps = true;

    //! RO16
    public function AllRO16()
    {
        $db = $this->db->table('ro16');
        return $db->get()->getResultArray();
    }
    public function InsertRO16($data)
    {
        $db = $this->db->table('ro16');
        return $db->insert($data);
    }
    public function UpdateRO16($data)
    {
        $db = $this->db->table('ro16');
        return $db->where('id_ro16', $data['id_ro16'])->update($data);
    }
    public function DeleteRO16($data)
    {
        $db = $this->db->table('ro16');
        return $db->where('id_ro16', $data['id_ro16'])->delete($data);
    }

    //! QF
    public function AllQF()
    {
        $db = $this->db->table('qf');
        return $db->get()->getResultArray();
    }
    public function InsertQF($data)
    {
        $db = $this->db->table('qf');
        return $db->insert($data);
    }
    public function UpdateQF($data)
    {
        $db = $this->db->table('qf');
        return $db->where('id_qf', $data['id_qf'])->update($data);
    }
    public function DeleteQF($data)
    {
        $db = $this->db->table('qf');
        return $db->where('id_qf', $data['id_qf'])->delete($data);
    }

    //! SF
    public function AllSF()
    {
        $db = $this->db->table('sf');
        return $db->get()->getResultArray();
    }
    public function InsertSF($data)
    {
        $db = $this->db->table('sf');
        return $db->insert($data);
    }
    public function UpdateSF($data)
    {
        $db = $this->db->table('sf');
        return $db->where('id_sf', $data['id_sf'])->update($data);
    }
    public function DeleteSF($data)
    {
        $db = $this->db->table('sf');
        return $db->where('id_sf', $data['id_sf'])->delete($data);
    }

    //! Final
    public function AllFinal()
    {
        $db = $this->db->table('final');
        return $db->get()->getResultArray();
    }
    public function InsertFinal($data)
    {
        $db = $this->db->table('final');
        return $db->insert($data);
    }
    public function UpdateFinal($data)
    {
        $db = $this->db->table('final');
        return $db->where('id_final', $data['id_final'])->update($data);
    }
    public function DeleteFinal($data)
    {
        $db = $this->db->table('final');
        return $db->where('id_final', $data['id_final'])->delete($data);
    }
}
