<?php

namespace App\Controllers\LaLiga;

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
            'subjudul1' => 'RFEF',
            'subjudul2' => 'LaLiga',
            'title' => 'LaLiga',
            'menu' => 'football',
            'submenu1' => 'rfef',
            'submenu2' => 'laliga',
            'submenu3' => 'llstats',
            'page' => 'football/league/spain/statistics',
            'profile' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }
}
