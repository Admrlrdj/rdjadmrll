<?php

namespace App\Controllers\Info;

use App\Controllers\BaseController;

use App\Models\Info\ModelUser;

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
            'subjudul1' => 'Profile',
            'subjudul2' => 'Profile',
            'title' => 'Profile',
            'menu' => 'profile',
            'submenu1' => 'profile',
            'submenu2' => 'profile',
            'submenu3' => 'profile',
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
        session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
        return redirect()->to('/profile');
    }
}
