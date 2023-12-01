<?php

namespace App\Controllers\Database;

use App\Controllers\BaseController;
use App\Models\Info\ModelUser;

class Confederation extends BaseController
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
            'subjudul2' => 'Confederation',
            'title' => 'Confederation',
            'menu' => 'data',
            'submenu1' => 'confederation',
            'submenu2' => 'confederation',
            'page' => 'football/database/confederation',
            'profile' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }
}
