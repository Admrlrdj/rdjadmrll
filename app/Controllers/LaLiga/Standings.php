<?php

namespace App\Controllers\LaLiga;

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
            'subjudul1' => 'RFEF',
            'subjudul2' => 'La Liga',
            'title' => 'La Liga',
            'menu' => 'football',
            'submenu1' => 'rfef',
            'submenu2' => 'laliga',
            'submenu3' => 'llstandings',
            'page' => 'football/league/spain/laliga',
            'profile' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }
}
