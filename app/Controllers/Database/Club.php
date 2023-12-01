<?php

namespace App\Controllers\Database;

use App\Controllers\BaseController;
use App\Models\Info\ModelUser;

class Club extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football Database',
            'subjudul1' => 'Football Database',
            'subjudul2' => 'Club',
            'title' => 'Club',
            'menu' => 'data',
            'submenu1' => 'club',
            'submenu2' => 'club',
            'page' => 'football/database/club',

        ];
        return view('template/template', $data);
    }
}
