<?php

namespace App\Controllers;

use App\Models\ModelUser;

class Profile extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
    }

    public function index()
    {
        $data = [
            'judul' => 'Profile',
            'title' => 'Profile',
            'menu' => 'profile',
            'page' => 'profile/profile',
            'profile' => $this->ModelUser->AllData(),
        ];
        return view('template/template', $data);
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
        $update = $this->ModelUser->AllData();
        // session()->destroy();
        // session()->set('id_user', $update['id_user']);
        // session()->set('nama', $update['nama']);
        // session()->set('username', $update['username']);
        // session()->set('password', $update['password']);
        // session()->set('role', $update['role']);
        // session()->set('tgl_lahir', $update['tgl_lahir']);
        // session()->set('telp', $update['telp']);
        // session()->set('jenkel', $update['jenkel']);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/profile');
    }
}
