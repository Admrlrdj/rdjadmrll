<?php

namespace App\Controllers\ChampionsLeague\CL2223;

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
            'subjudul1' => 'UEFA',
            'subjudul2' => 'Champions League 2022/2023',
            'title' => 'Champions League 2022/2023',
            'menu' => 'football',
            'submenu1' => 'uefa',
            'submenu2' => 'cl2223',
            'submenu3' => 'cl2223stats',
            'page' => 'football/uefa/cl2223/statistics',
            'profile' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }
}
