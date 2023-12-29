<?php

namespace App\Controllers\Ligue1;

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
            'subjudul1' => 'FFF',
            'subjudul2' => 'Ligue 1',
            'title' => 'Ligue 1',
            'menu' => 'football',
            'submenu1' => 'fff',
            'submenu2' => 'ligue1',
            'submenu3' => 'lg1standings',
            'page' => 'football/league/france/ligue1',
            'profile' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }
}
