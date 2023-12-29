<?php

namespace App\Controllers\Ligue1;

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
            'subjudul1' => 'FFF',
            'subjudul2' => 'Ligue 1',
            'title' => 'Ligue 1',
            'menu' => 'football',
            'submenu1' => 'fff',
            'submenu2' => 'ligue1',
            'submenu3' => 'lg1stats',
            'page' => 'football/league/france/statistics',
            'profile' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }
}
