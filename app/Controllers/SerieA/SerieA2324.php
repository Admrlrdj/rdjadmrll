<?php

namespace App\Controllers;

use App\Models\ModelClub;
use App\Models\ModelSerieA2324;
use App\Models\ModelUser;

class SerieA2324 extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelSerieA2324 = new ModelSerieA2324;
        $this->ModelClub = new ModelClub;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football',
            'subjudul1' => 'FIGC',
            'subjudul2' => 'Serie A',
            'title' => 'Serie A',
            'menu' => 'football',
            'submenu1' => 'figc',
            'submenu2' => 'seriea2324',
            'page' => 'football/figc/seriea2324',
            'profile' => $this->ModelUser->AllData(),
            'seriea2324' => $this->ModelSerieA2324->AllData(),
            'club' => $this->ModelClub->AllData(),
        ];
        return view('template/template', $data);
    }

    public function InsertData()
    {
        $data = [
            'id_club' => $this->request->getPost('id_club'),
            'play' => '0',
            'win' => '0',
            'draw' => '0',
            'lose' => '0',
            'goal_in' => '0',
            'goal_out' => '0',
            'goal_diff' => '0',
            'points' => '0',
        ];
        $this->ModelSerieA2324->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/seriea2324'));
    }

    public function UpdateData($id_seriea2324)
    {
        $data = [
            'id_seriea2324' => $id_seriea2324,
            'id_club' => $this->request->getPost('id_club'),
            'play' => $this->request->getPost('play'),
            'win' => $this->request->getPost('win'),
            'draw' => $this->request->getPost('draw'),
            'lose' => $this->request->getPost('lose'),
            'goal_in' => $this->request->getPost('goal_in'),
            'goal_out' => $this->request->getPost('goal_out'),
        ];
        $goalDiff = $data['goal_in'] - $data['goal_out'];
        $totalPoints = ($data['win'] * 3) + ($data['draw'] * 1) + ($data['lose'] * 0);
        $data['goal_diff'] = $goalDiff;
        $data['points'] = $totalPoints;

        $this->ModelSerieA2324->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Klub Berhasil Diubah');
        return redirect()->to(base_url('/seriea2324'));
    }

    public function DeleteData($id_seriea2324)
    {
        $data = [
            'id_seriea2324' => $id_seriea2324,
        ];

        $this->ModelSerieA2324->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Klub Berhasil Dihapus');
        return redirect()->to(base_url('/seriea2324'));
    }
}
