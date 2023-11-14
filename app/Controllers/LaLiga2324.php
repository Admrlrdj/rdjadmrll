<?php

namespace App\Controllers;

use App\Models\ModelConfederation;
use App\Models\ModelCountry;
use App\Models\ModelUser;
use App\Models\ModelLaLiga2324;
use App\Models\ModelClub;

class LaLiga2324 extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelLaLiga2324 = new ModelLaLiga2324;
        $this->ModelCountry = new ModelCountry;
        $this->ModelConfederation = new ModelConfederation;
        $this->ModelClub = new ModelClub;
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
            'submenu2' => 'laliga2324',
            'page' => 'football/rfef/laliga2324',
            'profile' => $this->ModelUser->AllData(),
            'laliga2324' => $this->ModelLaLiga2324->AllData(),
            'club' => $this->ModelClub->AllData(),
            'confederation' => $this->ModelConfederation->AllData(),

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
        $this->ModelLaLiga2324->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/laliga2324'));
    }

    public function UpdateData($id_laliga2324)
    {
        $data = [
            'id_laliga2324' => $id_laliga2324,
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

        $this->ModelLaLiga2324->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/laliga2324');
    }


    public function DeleteData($id_laliga2324)
    {
        $data = [
            'id_laliga2324' => $id_laliga2324,
        ];

        $this->ModelLaLiga2324->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/laliga2324');
    }
}
