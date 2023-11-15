<?php

namespace App\Controllers\Database;

use App\Controllers\BaseController;

use App\Models\ModelUser;
use App\Models\ModelConfederation;

class Confederation extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelConfederation = new ModelConfederation;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football Database',
            'subjudul1' => 'Football Database',
            'subjudul2' => 'Confederation',
            'title' => 'Confederation',
            'menu' => 'data',
            'submenu1' => 'confederation',
            'submenu2' => 'confederation',
            'page' => 'football/database/confederation',
            'profile' => $this->ModelUser->AllData(),
            'confederation' => $this->ModelConfederation->AllData(),

        ];
        return view('template/template', $data);
    }

    public function InsertData()
    {
        $data = [
            'name_confederation' => $this->request->getPost('name_confederation'),
            'code_confederation' => $this->request->getPost('code_confederation'),
        ];
        $this->ModelConfederation->InsertData($data);
        session()->setFlashdata('pesan', 'Tambah Konfederasi Berhasil');
        return redirect()->to(base_url('/confederation'));
    }

    public function UpdateData($id_confederation)
    {
        $data = [
            'id_confederation' => $id_confederation,
            'name_confederation' => $this->request->getPost('name_confederation'),
            'code_confederation' => $this->request->getPost('code_confederation'),
        ];
        $this->ModelConfederation->UpdateData($data);
        session()->setFlashdata('pesan', 'Edit Konfederasi Berhasil');
        return redirect()->to(base_url('/confederation'));
    }

    public function DeleteData($id_confederation)
    {
        $data = [
            'id_confederation' => $id_confederation,
        ];

        $this->ModelConfederation->DeleteData($data);
        session()->setFlashdata('pesan', 'Delete Konfederasi Berhasil');
        return redirect()->to(base_url('/confederation'));
    }
}
