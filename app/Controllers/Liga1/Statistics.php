<?php

namespace App\Controllers\Liga1;

use App\Controllers\BaseController;
use App\Models\Info\ModelUser;

class Statistics extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football',
            'subjudul1' => 'PSSI',
            'subjudul2' => 'Liga 1',
            'title' => 'Liga 1',
            'menu' => 'football',
            'submenu1' => 'pssi',
            'submenu2' => 'liga1',
            'submenu3' => 'l1stats',
            'page' => 'football/league/indonesia/statistics',
            'profile' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }
}
