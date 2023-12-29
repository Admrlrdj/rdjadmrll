<?php

namespace App\Controllers\ChampionsLeague\CL2324;

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
            'subjudul1' => 'UEFA',
            'subjudul2' => 'Champions League 2023/2024',
            'title' => 'Champions League 2023/2024',
            'menu' => 'football',
            'submenu1' => 'uefa',
            'submenu2' => 'cl2324',
            'submenu3' => 'cl2324standings',
            'page' => 'football/uefa/cl2324/cl2324',
            'profile' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }
}
