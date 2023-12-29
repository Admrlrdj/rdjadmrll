<?php

namespace App\Controllers\Liga1;

use App\Controllers\BaseController;
use App\Models\Info\ModelUser;


class Standings extends BaseController
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
            'submenu3' => 'l1standings',
            'page' => 'football/league/indonesia/liga1',
            'profile' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }
}
