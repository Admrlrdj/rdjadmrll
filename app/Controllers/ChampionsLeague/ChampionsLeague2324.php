<?php

namespace App\Controllers\ChampionsLeague;

use App\Controllers\BaseController;

use App\Models\Database\ModelConfederation;
use App\Models\Database\ModelCountry;
use App\Models\Database\ModelGroup;
use App\Models\Info\ModelUser;
use App\Models\ChampionsLeague\ModelCL2324;
use App\Models\Database\ModelClub;
use App\Models\Database\ModelKnockout;

class ChampionsLeague2324 extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelCL2324 = new ModelCL2324;
        $this->ModelCountry = new ModelCountry;
        $this->ModelConfederation = new ModelConfederation;
        $this->ModelGroup = new ModelGroup;
        $this->ModelClub = new ModelClub;
        $this->ModelKnockout = new ModelKnockout;
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
            'club' => $this->ModelClub->AllData(),
            'confederation' => $this->ModelConfederation->AllData(),
            'grup' => $this->ModelGroup->AllData(),
            'ro16' => $this->ModelKnockout->AllRO16(),

        ];
        return view('template/template', $data);
    }

    public function InsertData()
    {
        $data = [
            'id_club' => $this->request->getPost('id_club'),
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
        $this->ModelCL2324->InsertData($data);
        session()->setFlashdata('pesan', 'Add Negara Berhasil');
        return redirect()->to(base_url('/cl2324'));
    }

    public function UpdateData($id_cl2324)
    {
        $data = [
            'id_cl2324' => $id_cl2324,
            'id_club' => $this->request->getPost('id_club'),
            'id_group' => $this->request->getPost('id_group'),
            'play' => $this->request->getPost('play'),
            'win' => $this->request->getPost('win'),
            'draw' => $this->request->getPost('draw'),
            'lose' => $this->request->getPost('lose'),
            'goal_in' => $this->request->getPost('goal_in'),
            'goal_out' => $this->request->getPost('goal_out'),
            'group_rank' => $this->request->getPost('group_rank'),
        ];

        $goalDiff = $data['goal_in'] - $data['goal_out'];

        $totalPoints = ($data['win'] * 3) + ($data['draw'] * 1) + ($data['lose'] * 0);

        $data['goal_diff'] = $goalDiff;
        $data['points'] = $totalPoints;

        $this->ModelCL2324->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/cl2324');
    }


    public function DeleteData($id_cl2324)
    {
        $data = [
            'id_cl2324' => $id_cl2324,
        ];

        $this->ModelCL2324->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/cl2324');
    }

    public function InsertDataRO16($id_cl2324)
    {
        $data = [
            'id_cl2324' => $id_cl2324,
            'id_club' => $this->request->getPost('id_club'),
            'id_ro16' => $this->request->getPost('id_ro16'),
        ];
        $this->ModelCL2324->UpdateData($data);
        session()->setFlashdata('pesan', 'Add Negara Berhasil');
        return redirect()->to(base_url('/cl2324'));
    }
}
