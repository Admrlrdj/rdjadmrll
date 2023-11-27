<?php

namespace App\Controllers\Bundesliga;

use App\Controllers\BaseController;
use App\Models\Database\ModelConfederation;
use App\Models\Database\ModelCountry;
use App\Models\Info\ModelUser;
use App\Models\Bundesliga\ModelBundesliga2324;
use App\Models\Bundesliga\ModelBundesliga2223;
use App\Models\Bundesliga\ModelBundesliga2122;
use App\Models\Bundesliga\ModelBundesliga2021;
use App\Models\Bundesliga\ModelBundesliga1920;
use App\Models\Database\ModelClub;

class Bundesliga extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelBundesliga2324 = new ModelBundesliga2324;
        $this->ModelBundesliga2223 = new ModelBundesliga2223;
        $this->ModelBundesliga2122 = new ModelBundesliga2122;
        $this->ModelBundesliga2021 = new ModelBundesliga2021;
        $this->ModelBundesliga1920 = new ModelBundesliga1920;
        $this->ModelCountry = new ModelCountry;
        $this->ModelConfederation = new ModelConfederation;
        $this->ModelClub = new ModelClub;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football',
            'subjudul1' => 'DFL',
            'subjudul2' => 'Bundesliga',
            'title' => 'Bundesliga',
            'menu' => 'football',
            'submenu1' => 'dfl',
            'submenu2' => 'bundesliga',
            'page' => 'football/league/dfl/bundesliga',
            'profile' => $this->ModelUser->AllData(),
            'bundesliga2324' => $this->ModelBundesliga2324->AllData(),
            'bundesliga2223' => $this->ModelBundesliga2223->AllData(),
            'bundesliga2122' => $this->ModelBundesliga2122->AllData(),
            'bundesliga2021' => $this->ModelBundesliga2021->AllData(),
            'bundesliga1920' => $this->ModelBundesliga1920->AllData(),
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
        $this->ModelBundesliga2324->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/bundesliga2324'));
    }
    public function UpdateData2324($id_bundesliga2324)
    {
        $data = [
            'id_bundesliga2324' => $id_bundesliga2324,
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

        $this->ModelBundesliga2324->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/bundesliga2324');
    }
    public function DeleteData2324($id_bundesliga2324)
    {
        $data = [
            'id_bundesliga2324' => $id_bundesliga2324,
        ];

        $this->ModelBundesliga2324->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/bundesliga2324');
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
        $this->ModelBundesliga2223->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/bundesliga2324'));
    }
    public function UpdateData2223($id_bundesliga2223)
    {
        $data = [
            'id_bundesliga2223' => $id_bundesliga2223,
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

        $this->ModelBundesliga2223->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/bundesliga2324');
    }
    public function DeleteData2223($id_bundesliga2223)
    {
        $data = [
            'id_bundesliga2223' => $id_bundesliga2223,
        ];

        $this->ModelBundesliga2223->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/bundesliga2324');
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
        $this->ModelBundesliga2122->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/bundesliga2324'));
    }
    public function UpdateData2122($id_bundesliga2122)
    {
        $data = [
            'id_bundesliga2122' => $id_bundesliga2122,
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

        $this->ModelBundesliga2122->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/bundesliga2324');
    }
    public function DeleteData2122($id_bundesliga2122)
    {
        $data = [
            'id_bundesliga2122' => $id_bundesliga2122,
        ];

        $this->ModelBundesliga2122->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/bundesliga2324');
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
        $this->ModelBundesliga2021->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/bundesliga2324'));
    }
    public function UpdateData2021($id_bundesliga2021)
    {
        $data = [
            'id_bundesliga2021' => $id_bundesliga2021,
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

        $this->ModelBundesliga2021->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/bundesliga2324');
    }
    public function DeleteData2021($id_bundesliga2021)
    {
        $data = [
            'id_bundesliga2021' => $id_bundesliga2021,
        ];

        $this->ModelBundesliga2021->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/bundesliga2324');
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
        $this->ModelBundesliga1920->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/bundesliga2324'));
    }
    public function UpdateData1920($id_bundesliga1920)
    {
        $data = [
            'id_bundesliga1920' => $id_bundesliga1920,
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

        $this->ModelBundesliga1920->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/bundesliga2324');
    }
    public function DeleteData1920($id_bundesliga1920)
    {
        $data = [
            'id_bundesliga1920' => $id_bundesliga1920,
        ];

        $this->ModelBundesliga1920->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/bundesliga2324');
    }
}
