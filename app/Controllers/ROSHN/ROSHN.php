<?php

namespace App\Controllers\ROSHN;

use App\Controllers\BaseController;
use App\Models\Info\ModelUser;


class ROSHN extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football',
            'subjudul1' => 'SAFF',
            'subjudul2' => 'ROSHN Saudi League',
            'title' => 'ROSHN Saudi League',
            'menu' => 'football',
            'submenu1' => 'saff',
            'submenu2' => 'roshn',
            'page' => 'football/league/saudi/roshn',
            'profile' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }
}
