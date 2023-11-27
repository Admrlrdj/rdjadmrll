<?php

namespace App\Controllers\LaLiga;

use App\Controllers\BaseController;
use App\Models\Database\ModelConfederation;
use App\Models\Database\ModelCountry;
use App\Models\Info\ModelUser;
use App\Models\LaLiga\ModelLaLiga2324;
use App\Models\LaLiga\ModelLaLiga2223;
use App\Models\LaLiga\ModelLaLiga2122;
use App\Models\LaLiga\ModelLaLiga2021;
use App\Models\LaLiga\ModelLaLiga1920;
use App\Models\Database\ModelClub;

class LaLiga extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelLaLiga2324 = new ModelLaLiga2324;
        $this->ModelLaLiga2223 = new ModelLaLiga2223;
        $this->ModelLaLiga2122 = new ModelLaLiga2122;
        $this->ModelLaLiga2021 = new ModelLaLiga2021;
        $this->ModelLaLiga1920 = new ModelLaLiga1920;
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
            'submenu2' => 'laliga',
            'page' => 'football/league/rfef/laliga',
            'profile' => $this->ModelUser->AllData(),
            'laliga2324' => $this->ModelLaLiga2324->AllData(),
            'laliga2223' => $this->ModelLaLiga2223->AllData(),
            'laliga2122' => $this->ModelLaLiga2122->AllData(),
            'laliga2021' => $this->ModelLaLiga2021->AllData(),
            'laliga1920' => $this->ModelLaLiga1920->AllData(),
            'club' => $this->ModelClub->AllData(),
            'confederation' => $this->ModelConfederation->AllData(),

        ];
        return view('template/template', $data);
    }

    public function InsertData2324()
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
    public function UpdateData2324($id_laliga2324)
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
    public function DeleteData2324($id_laliga2324)
    {
        $data = [
            'id_laliga2324' => $id_laliga2324,
        ];

        $this->ModelLaLiga2324->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/laliga2324');
    }


    public function InsertData2223()
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
        $this->ModelLaLiga2223->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/laliga2324'));
    }
    public function UpdateData2223($id_laliga2223)
    {
        $data = [
            'id_laliga2223' => $id_laliga2223,
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

        $this->ModelLaLiga2223->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/laliga2324');
    }
    public function DeleteData2223($id_laliga2223)
    {
        $data = [
            'id_laliga2223' => $id_laliga2223,
        ];

        $this->ModelLaLiga2223->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/laliga2324');
    }


    public function InsertData2122()
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
        $this->ModelLaLiga2122->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/laliga2324'));
    }
    public function UpdateData2122($id_laliga2122)
    {
        $data = [
            'id_laliga2122' => $id_laliga2122,
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

        $this->ModelLaLiga2122->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/laliga2324');
    }
    public function DeleteData2122($id_laliga2122)
    {
        $data = [
            'id_laliga2122' => $id_laliga2122,
        ];

        $this->ModelLaLiga2122->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/laliga2324');
    }


    public function InsertData2021()
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
        $this->ModelLaLiga2021->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/laliga2324'));
    }
    public function UpdateData2021($id_laliga2021)
    {
        $data = [
            'id_laliga2021' => $id_laliga2021,
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

        $this->ModelLaLiga2021->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/laliga2324');
    }
    public function DeleteData2021($id_laliga2021)
    {
        $data = [
            'id_laliga2021' => $id_laliga2021,
        ];

        $this->ModelLaLiga2021->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/laliga2324');
    }


    public function InsertData1920()
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
        $this->ModelLaLiga1920->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/laliga2324'));
    }
    public function UpdateData1920($id_laliga1920)
    {
        $data = [
            'id_laliga1920' => $id_laliga1920,
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

        $this->ModelLaLiga1920->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/laliga2324');
    }
    public function DeleteData1920($id_laliga1920)
    {
        $data = [
            'id_laliga1920' => $id_laliga1920,
        ];

        $this->ModelLaLiga1920->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/laliga2324');
    }
}
