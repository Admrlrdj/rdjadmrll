<?php

namespace App\Controllers\Database;

use App\Controllers\BaseController;

use App\Models\Info\ModelUser;
use App\Models\Database\ModelGroup;

class Group extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelGroup = new ModelGroup;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football Database',
            'subjudul1' => 'Football Database',
            'subjudul2' => 'Group',
            'title' => 'Group',
            'menu' => 'data',
            'submenu1' => 'group',
            'submenu2' => 'group',
            'page' => 'football/database/group',
            'profile' => $this->ModelUser->AllData(),
            'group' => $this->ModelGroup->AllData(),

        ];
        return view('template/template', $data);
    }

    public function InsertData()
    {
        $data = [
            'code_group' => $this->request->getPost('code_group'),
        ];
        $this->ModelGroup->InsertData($data);
        session()->setFlashdata('pesan', 'Berhasil Menambah Grup');
        return redirect()->to(base_url('/group'));
    }

    public function UpdateData($id_group)
    {
        $data = [
            'id_group' => $id_group,
            'code_group' => $this->request->getPost('code_group'),
        ];

        $this->ModelGroup->UpdateData($data);
        session()->setFlashdata('pesan', 'Berhasil Mengedit Grup');
        return redirect()->to(base_url('/group'));
    }

    public function DeleteData($id_group)
    {
        $data = [
            'id_group' => $id_group,
        ];

        $this->ModelGroup->DeleteData($data);
        session()->setFlashdata('pesan', 'Berhasil Menghapus Grup');
        return redirect()->to(base_url('/group'));
    }
}
