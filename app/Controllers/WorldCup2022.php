<?php

namespace App\Controllers;

use App\Models\ModelUser;
use App\Models\ModelWC22;

class WorldCup2022 extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelWC22 = new ModelWC22;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football',
            'subjudul1' => 'FIFA',
            'subjudul2' => 'FIFA World Cup 2022',
            'title' => 'FIFA World Cup 2022',
            'menu' => 'football',
            'submenu1' => 'fifa',
            'submenu2' => 'wc22',
            'page' => 'football/fifa/wc22',
            'profile' => $this->ModelUser->AllData(),
            // 'wc22' => $this->ModelWC22->AllData(),

        ];
        return view('template/template', $data);
    }

    // public function InsertData()
    // {
    //     $data = [
    //         'nama' => $this->request->getPost('nama'),
    //         'username' => $this->request->getPost('username'),
    //         'password' => $this->request->getPost('password'),
    //         'role' => $this->request->getPost('role'),
    //         'tgl_lahir' => $this->request->getPost('tgl_lahir'),
    //         'telp' => $this->request->getPost('telp'),
    //         'jenkel' => $this->request->getPost('jenkel'),
    //     ];
    //     $this->ModelUser->InsertData($data);
    //     session()->setFlashdata('pesan', 'Registrasi Berhasil');
    //     return redirect()->to(base_url('/user'));
    // }

    // public function UpdateData($id_user)
    // {
    //     $data = [
    //         'id_user' => $id_user,
    //         'nama' => $this->request->getPost('nama'),
    //         'username' => $this->request->getPost('username'),
    //         'password' => $this->request->getPost('password'),
    //         'role' => $this->request->getPost('role'),
    //         'tgl_lahir' => $this->request->getPost('tgl_lahir'),
    //         'telp' => $this->request->getPost('telp'),
    //         'jenkel' => $this->request->getPost('jenkel'),
    //     ];

    //     $this->ModelUser->UpdateData($data);
    //     session()->setFlashdata('pesan', 'Data Berhasil Diubah!!');
    //     return redirect()->to('/user');
    // }

    // public function DeleteData($id_user)
    // {
    //     $data = [
    //         'id_user' => $id_user,
    //     ];

    //     $this->ModelUser->DeleteData($data);
    //     session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!');
    //     return redirect()->to('/user');
    // }
}