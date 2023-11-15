<?php

namespace App\Controllers;

use App\Models\ModelConfederation;
use App\Models\ModelCountry;
use App\Models\ModelGroup;
use App\Models\ModelKnockout;
use App\Models\ModelUser;
use App\Models\ModelWC22;

class WorldCup2022 extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelWC22 = new ModelWC22;
        $this->ModelCountry = new ModelCountry;
        $this->ModelConfederation = new ModelConfederation;
        $this->ModelGroup = new ModelGroup;
        $this->ModelKnockout = new ModelKnockout;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football',
            'subjudul1' => 'FIFA',
            'subjudul2' => 'FIFA World Cup 2022',
            'title' => 'FIFA World Cup 2022',
            'menu' => 'football',
            'submenu1' => 'fifa',
            'submenu2' => 'wc22',
            'page' => 'football/fifa/wc22',
            'profile' => $this->ModelUser->AllData(),
            'wc22' => $this->ModelWC22->AllData(),
            'country' => $this->ModelCountry->AllData(),
            'confederation' => $this->ModelConfederation->AllData(),
            'grup' => $this->ModelGroup->AllData(),
            'ro16' => $this->ModelKnockout->AllRO16(),
            'qf' => $this->ModelKnockout->AllQF(),
            'sf' => $this->ModelKnockout->AllSF(),
            'final' => $this->ModelKnockout->AllFinal(),

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
            'status_ro16' => $this->request->getPost('status_ro16'),
        ];

        $goalDiff = $data['goal_in'] - $data['goal_out'];

        $totalPoints = ($data['win'] * 3) + ($data['draw'] * 1) + ($data['lose'] * 0);

        $data['goal_diff'] = $goalDiff;
        $data['points'] = $totalPoints;

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

    public function InsertDataRO16($id_wc22)
    {
        $data = [
            'id_wc22' => $id_wc22,
            'id_country' => $this->request->getPost('id_country'),
            'id_ro16' => $this->request->getPost('id_ro16'),
            'status_ro16' => 2,
        ];
        $this->ModelWC22->UpdateData($data);
        session()->setFlashdata('pesan', 'Add Negara Berhasil');
        return redirect()->to(base_url('/wc22'));
    }

    public function InsertDataQF($id_wc22)
    {
        $data = [
            'id_wc22' => $id_wc22,
            'id_country' => $this->request->getPost('id_country'),
            'id_qf' => $this->request->getPost('id_qf'),
            'status_qf' => 2,
        ];
        $this->ModelWC22->UpdateData($data);
        session()->setFlashdata('pesan', 'Add Negara Berhasil');
        return redirect()->to(base_url('/wc22'));
    }

    public function InsertDataSF($id_wc22)
    {
        $data = [
            'id_wc22' => $id_wc22,
            'id_country' => $this->request->getPost('id_country'),
            'id_sf' => $this->request->getPost('id_sf'),
            'status_sf' => 2,
        ];
        $this->ModelWC22->UpdateData($data);
        session()->setFlashdata('pesan', 'Add Negara Berhasil');
        return redirect()->to(base_url('/wc22'));
    }

    public function InsertDataFinal($id_wc22)
    {
        $data = [
            'id_wc22' => $id_wc22,
            'id_country' => $this->request->getPost('id_country'),
            'id_final' => $this->request->getPost('id_final'),
            'status_final' => 2,
        ];
        $this->ModelWC22->UpdateData($data);
        session()->setFlashdata('pesan', 'Add Negara Berhasil');
        return redirect()->to(base_url('/wc22'));
    }
}
