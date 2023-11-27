<?php

namespace App\Controllers\PremierLeague;

use App\Controllers\BaseController;
use App\Models\Info\ModelUser;
use App\Models\PremierLeague\ModelPremierLeague2324;
use App\Models\PremierLeague\ModelPremierLeague2223;
use App\Models\PremierLeague\ModelPremierLeague2122;
use App\Models\PremierLeague\ModelPremierLeague2021;
use App\Models\PremierLeague\ModelPremierLeague1920;
use App\Models\Database\ModelClub;

class PremierLeague extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelPremierLeague2324 = new ModelPremierLeague2324;
        $this->ModelPremierLeague2223 = new ModelPremierLeague2223;
        $this->ModelPremierLeague2122 = new ModelPremierLeague2122;
        $this->ModelPremierLeague2021 = new ModelPremierLeague2021;
        $this->ModelPremierLeague1920 = new ModelPremierLeague1920;
        $this->ModelClub = new ModelClub;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football',
            'subjudul1' => 'FA',
            'subjudul2' => 'Premier League',
            'title' => 'Premier League',
            'menu' => 'football',
            'submenu1' => 'fa',
            'submenu2' => 'premierleague',
            'page' => 'football/league/fa/premierleague',
            'profile' => $this->ModelUser->AllData(),
            'pl2324' => $this->ModelPremierLeague2324->AllData(),
            'pl2223' => $this->ModelPremierLeague2223->AllData(),
            'pl2122' => $this->ModelPremierLeague2122->AllData(),
            'pl2021' => $this->ModelPremierLeague2021->AllData(),
            'pl1920' => $this->ModelPremierLeague1920->AllData(),
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
        $this->ModelPremierLeague2324->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/pl2324'));
    }
    public function UpdateData2324($id_pl2324)
    {
        $data = [
            'id_pl2324' => $id_pl2324,
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

        $this->ModelPremierLeague2324->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/pl2324');
    }
    public function DeleteData2324($id_pl2324)
    {
        $data = [
            'id_pl2324' => $id_pl2324,
        ];

        $this->ModelPremierLeague2324->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/pl2324');
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
        $this->ModelPremierLeague2223->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/pl2324'));
    }
    public function UpdateData2223($id_pl2223)
    {
        $data = [
            'id_pl2223' => $id_pl2223,
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

        $this->ModelPremierLeague2223->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/pl2324');
    }
    public function DeleteData2223($id_pl2223)
    {
        $data = [
            'id_pl2223' => $id_pl2223,
        ];

        $this->ModelPremierLeague2223->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/pl2324');
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
        $this->ModelPremierLeague2122->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/pl2324'));
    }
    public function UpdateData2122($id_pl2122)
    {
        $data = [
            'id_pl2122' => $id_pl2122,
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

        $this->ModelPremierLeague2122->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/pl2324');
    }
    public function DeleteData2122($id_pl2122)
    {
        $data = [
            'id_pl2122' => $id_pl2122,
        ];

        $this->ModelPremierLeague2122->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/pl2324');
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
        $this->ModelPremierLeague2021->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/pl2324'));
    }
    public function UpdateData2021($id_pl2021)
    {
        $data = [
            'id_pl2021' => $id_pl2021,
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

        $this->ModelPremierLeague2021->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/pl2324');
    }
    public function DeleteData2021($id_pl2021)
    {
        $data = [
            'id_pl2021' => $id_pl2021,
        ];

        $this->ModelPremierLeague2021->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/pl2324');
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
        $this->ModelPremierLeague1920->InsertData($data);
        session()->setFlashdata('pesan', 'Add Klub Berhasil');
        return redirect()->to(base_url('/pl2324'));
    }
    public function UpdateData1920($id_pl1920)
    {
        $data = [
            'id_pl1920' => $id_pl1920,
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

        $this->ModelPremierLeague1920->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/pl2324');
    }
    public function DeleteData1920($id_pl1920)
    {
        $data = [
            'id_pl1920' => $id_pl1920,
        ];

        $this->ModelPremierLeague1920->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/pl2324');
    }
}
