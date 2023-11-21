<?php

namespace App\Controllers\SerieA;

use App\Controllers\BaseController;
use App\Models\Database\ModelClub;
use App\Models\SerieA\ModelSerieA1920;
use App\Models\SerieA\ModelSerieA2021;
use App\Models\SerieA\ModelSerieA2122;
use App\Models\SerieA\ModelSerieA2223;
use App\Models\SerieA\ModelSerieA2324;
use App\Models\Info\ModelUser;

class SerieA extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelSerieA2324 = new ModelSerieA2324;
        $this->ModelSerieA2223 = new ModelSerieA2223;
        $this->ModelSerieA2122 = new ModelSerieA2122;
        $this->ModelSerieA2021 = new ModelSerieA2021;
        $this->ModelSerieA1920 = new ModelSerieA1920;
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
            'seriea2223' => $this->ModelSerieA2223->AllData(),
            'seriea2122' => $this->ModelSerieA2122->AllData(),
            'seriea2021' => $this->ModelSerieA2021->AllData(),
            'seriea1920' => $this->ModelSerieA1920->AllData(),
            'club' => $this->ModelClub->AllData(),
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
        $this->ModelSerieA2324->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/seriea2324'));
    }
    public function UpdateData2324($id_seriea2324)
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
    public function DeleteData2324($id_seriea2324)
    {
        $data = [
            'id_seriea2324' => $id_seriea2324,
        ];

        $this->ModelSerieA2324->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Klub Berhasil Dihapus');
        return redirect()->to(base_url('/seriea2324'));
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
        $this->ModelSerieA2223->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/seriea2324'));
    }
    public function UpdateData2223($id_seriea2223)
    {
        $data = [
            'id_seriea2223' => $id_seriea2223,
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

        $this->ModelSerieA2223->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/seriea2324');
    }
    public function DeleteData2223($id_seriea2223)
    {
        $data = [
            'id_seriea2223' => $id_seriea2223,
        ];

        $this->ModelSerieA2223->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/seriea2324');
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
        $this->ModelSerieA2122->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/seriea2324'));
    }
    public function UpdateData2122($id_seriea2122)
    {
        $data = [
            'id_seriea2122' => $id_seriea2122,
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

        $this->ModelSerieA2122->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/seriea2324');
    }
    public function DeleteData2122($id_seriea2122)
    {
        $data = [
            'id_seriea2122' => $id_seriea2122,
        ];

        $this->ModelSerieA2122->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/seriea2324');
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
        $this->ModelSerieA2021->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/seriea2324'));
    }
    public function UpdateData2021($id_seriea2021)
    {
        $data = [
            'id_seriea2021' => $id_seriea2021,
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

        $this->ModelSerieA2021->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/seriea2324');
    }
    public function DeleteData2021($id_seriea2021)
    {
        $data = [
            'id_seriea2021' => $id_seriea2021,
        ];

        $this->ModelSerieA2021->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/seriea2324');
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
        $this->ModelSerieA1920->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/seriea2324'));
    }
    public function UpdateData1920($id_seriea1920)
    {
        $data = [
            'id_seriea1920' => $id_seriea1920,
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

        $this->ModelSerieA1920->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/seriea2324');
    }
    public function DeleteData1920($id_seriea1920)
    {
        $data = [
            'id_seriea1920' => $id_seriea1920,
        ];

        $this->ModelSerieA1920->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/seriea2324');
    }
}
