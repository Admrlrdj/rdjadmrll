<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelWC22 extends Model
{
    public function AllData()
    {
        $db = $this->db->table('wc22');
        return $db->get()->getResultArray();
    }
}
