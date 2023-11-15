<?php

namespace App\Controllers\Database;

use App\Controllers\BaseController;
use App\Models\ModelConfederation;
use App\Models\ModelUser;
use App\Models\ModelCountry;
use App\Models\ModelClub;

class Club extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelCountry = new ModelCountry;
        $this->ModelClub = new ModelClub;
        $this->ModelConfederation = new ModelConfederation;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football Database',
            'subjudul1' => 'Football Database',
            'subjudul2' => 'Club',
            'title' => 'Club',
            'menu' => 'data',
            'submenu1' => 'club',
            'submenu2' => 'club',
            'page' => 'football/database/club',
            'profile' => $this->ModelUser->AllData(),
            'club' => $this->ModelClub->AllData(),
            'country' => $this->ModelCountry->AllData(),
            'confederation' => $this->ModelConfederation->AllData(),

        ];
        return view('template/template', $data);
    }

    public function InsertData()
    {
        $data = [
            'name_club' => $this->request->getPost('name_club'),
            'code_club' => $this->request->getPost('code_club'),
            'id_country' => $this->request->getPost('id_country'),
            'id_confederation' => $this->request->getPost('id_confederation'),
        ];
        $this->ModelClub->InsertData($data);
        session()->setFlashdata('pesan', 'Tambah Klub Berhasil');
        return redirect()->to(base_url('/club'));
    }

    public function UpdateData($id_club)
    {
        $data = [
            'id_club' => $id_club,
            'name_club' => $this->request->getPost('name_club'),
            'code_club' => $this->request->getPost('code_club'),
            'id_country' => $this->request->getPost('id_country'),
            'id_confederation' => $this->request->getPost('id_confederation'),
        ];
        $this->ModelClub->UpdateData($data);
        session()->setFlashdata('pesan', 'Edit Klub Berhasil');
        return redirect()->to(base_url('/club'));
    }

    public function DeleteData($id_club)
    {
        $data = [
            'id_club' => $id_club,
        ];

        $this->ModelClub->DeleteData($data);
        session()->setFlashdata('pesan', 'Delete Club Berhasil');
        return redirect()->to(base_url('/club'));
    }
}
