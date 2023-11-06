<?php

namespace App\Controllers;

use App\Models\ModelConfederation;
use App\Models\ModelCountry;
use App\Models\ModelGroup;
use App\Models\ModelUser;
use App\Models\ModelCL2324;
use App\Models\ModelWC22;

class ChampionsLeague2324 extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelCL2324 = new ModelCL2324;
        $this->ModelCountry = new ModelCountry;
        $this->ModelConfederation = new ModelConfederation;
        $this->ModelGroup = new ModelGroup;
        $this->ModelWC22 = new ModelWC22;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football',
            'subjudul1' => 'UEFA',
            'subjudul2' => 'UEFA Champions League 2023/2024',
            'title' => 'UEFA Champions League 2023/2024',
            'menu' => 'football',
            'submenu1' => 'uefa',
            'submenu2' => 'cl2324',
            'page' => 'football/uefa/cl2324',
            'profile' => $this->ModelUser->AllData(),
            'cl2324' => $this->ModelCL2324->AllData(),
            'country' => $this->ModelCountry->AllData(),
            'confederation' => $this->ModelConfederation->AllData(),
            'grup' => $this->ModelGroup->AllData(),
            'wc22' => $this->ModelWC22->AllData(),

        ];
        return view('template/template', $data);
    }

    public function InsertData()
    {
        $data = [
            'id_country' => $this->request->getPost('id_country'),
            'id_group' => $this->request->getPost('id_group'),
            'play' => '0',
            'win' => '0',
            'draw' => '0',
            'lose' => '0',
            'goal_in' => '0',
            'goal_out' => '0',
            'goal_diff' => '0',
            'points' => '0',
        ];
        $this->ModelWC22->InsertData($data);
        session()->setFlashdata('pesan', 'Add Negara Berhasil');
        return redirect()->to(base_url('/wc22'));
    }

    public function UpdateData($id_wc22)
    {
        $data = [
            'id_wc22' => $id_wc22,
            'id_country' => $this->request->getPost('id_country'),
            'id_group' => $this->request->getPost('id_group'),
            'play' => $this->request->getPost('play'),
            'win' => $this->request->getPost('win'),
            'draw' => $this->request->getPost('draw'),
            'lose' => $this->request->getPost('lose'),
            'goal_in' => $this->request->getPost('goal_in'),
            'goal_out' => $this->request->getPost('goal_out'),
            'goal_diff' => $this->request->getPost('goal_diff'),
            'points' => $this->request->getPost('points'),
        ];

        $this->ModelWC22->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/wc22');
    }

    public function DeleteData($id_wc22)
    {
        $data = [
            'id_wc22' => $id_wc22,
        ];

        $this->ModelWC22->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/wc22');
    }
}
