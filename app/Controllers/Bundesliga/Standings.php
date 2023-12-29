<?php

namespace App\Controllers\Bundesliga;

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
            'subjudul1' => 'DFL',
            'subjudul2' => 'Bundesliga',
            'title' => 'Bundesliga',
            'menu' => 'football',
            'submenu1' => 'dfl',
            'submenu2' => 'bundesliga',
            'submenu3' => 'blstandings',
            'page' => 'football/league/germany/bundesliga',
            'profile' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }
}
