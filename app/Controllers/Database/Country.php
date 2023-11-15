<?php

namespace App\Controllers\Database;

use App\Controllers\BaseController;

use App\Models\ModelConfederation;
use App\Models\ModelUser;
use App\Models\ModelCountry;

class Country extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelCountry = new ModelCountry;
        $this->ModelConfederation = new ModelConfederation;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football Database',
            'subjudul1' => 'Football Database',
            'subjudul2' => 'Country',
            'title' => 'Country',
            'menu' => 'data',
            'submenu1' => 'country',
            'submenu2' => 'country',
            'page' => 'football/database/country',
            'profile' => $this->ModelUser->AllData(),
            'country' => $this->ModelCountry->AllData(),
            'confederation' => $this->ModelConfederation->AllData(),

        ];
        return view('template/template', $data);
    }

    public function InsertData()
    {
        $data = [
            'name_country' => $this->request->getPost('name_country'),
            'code_country' => $this->request->getPost('code_country'),
            'id_confederation' => $this->request->getPost('id_confederation'),
        ];
        $this->ModelCountry->InsertData($data);
        session()->setFlashdata('pesan', 'Tambah Negara Berhasil');
        return redirect()->to(base_url('/country'));
    }

    public function UpdateData($id_country)
    {
        $data = [
            'id_country' => $id_country,
            'name_country' => $this->request->getPost('name_country'),
            'code_country' => $this->request->getPost('code_country'),
            'id_confederation' => $this->request->getPost('id_confederation'),
        ];
        $this->ModelCountry->UpdateData($data);
        session()->setFlashdata('pesan', 'Edit Negara Berhasil');
        return redirect()->to(base_url('/country'));
    }

    public function DeleteData($id_country)
    {
        $data = [
            'id_country' => $id_country,
        ];

        $this->ModelCountry->DeleteData($data);
        session()->setFlashdata('pesan', 'Delete Negara Berhasil');
        return redirect()->to(base_url('/country'));
    }
}
