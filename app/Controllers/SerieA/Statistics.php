<?php

namespace App\Controllers\SerieA;

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
            'subjudul1' => 'FIGC',
            'subjudul2' => 'Serie A',
            'title' => 'Serie A',
            'menu' => 'football',
            'submenu1' => 'figc',
            'submenu2' => 'seriea',
            'submenu3' => 'sastats',
            'page' => 'football/league/italy/statistics',
            'profile' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }
}
