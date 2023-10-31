<?php

namespace App\Controllers;

use App\Models\ModelUser;

class User extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
    }

    public function index()
    {
        $data = [
            'judul' => 'User',
            'subjudul1' => 'User',
            'subjudul2' => 'User',
            'title' => 'User',
            'menu' => 'user',
            'submenu1' => 'user',
            'submenu2' => 'user',
            'page' => 'user/user',
            'profile' => $this->ModelUser->AllData(),
            'user' => $this->ModelUser->AllData(),

        ];
        return view('template/template', $data);
    }

    public function InsertData()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'role' => $this->request->getPost('role'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'telp' => $this->request->getPost('telp'),
            'jenkel' => $this->request->getPost('jenkel'),
        ];
        $this->ModelUser->InsertData($data);
        session()->setFlashdata('pesan', 'Registrasi Berhasil');
        return redirect()->to(base_url('/user'));
    }

    public function UpdateData($id_user)
    {
        $data = [
            'id_user' => $id_user,
            'nama' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'role' => $this->request->getPost('role'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'telp' => $this->request->getPost('telp'),
            'jenkel' => $this->request->getPost('jenkel'),
        ];

        $this->ModelUser->UpdateData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/user');
    }

    public function DeleteData($id_user)
    {
        $data = [
            'id_user' => $id_user,
        ];

        $this->ModelUser->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
        return redirect()->to('/user');
    }
}
