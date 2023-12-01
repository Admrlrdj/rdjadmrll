<?php

namespace App\Controllers\Database;

use App\Controllers\BaseController;
use App\Models\Info\ModelUser;

class Country extends BaseController
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
            'subjudul2' => 'Country',
            'title' => 'Country',
            'menu' => 'data',
            'submenu1' => 'country',
            'submenu2' => 'country',
            'page' => 'football/database/country',
            'profile' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }
}
