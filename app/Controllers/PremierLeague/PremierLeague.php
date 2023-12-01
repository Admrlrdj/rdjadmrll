<?php

namespace App\Controllers\PremierLeague;

use App\Controllers\BaseController;
use App\Models\Info\ModelUser;

class PremierLeague extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football',
            'subjudul1' => 'FA',
            'subjudul2' => 'Premier League',
            'title' => 'Premier League',
            'menu' => 'football',
            'submenu1' => 'fa',
            'submenu2' => 'premierleague',
            'page' => 'football/league/english/premierleague',
            'profile' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }
}
