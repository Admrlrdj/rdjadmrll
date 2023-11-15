<?php

namespace App\Controllers\Database;

use App\Controllers\BaseController;
use App\Models\Info\ModelUser;
use App\Models\Database\ModelKnockout;

class Knockout extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser;
        $this->ModelKnockout = new ModelKnockout;
    }

    public function index()
    {
        $data = [
            'judul' => 'Football Database',
            'subjudul1' => 'Football Database',
            'subjudul2' => 'Knockout',
            'title' => 'Knockout',
            'menu' => 'data',
            'submenu1' => 'knockout',
            'submenu2' => 'knockout',
            'page' => 'football/database/knockout',
            'profile' => $this->ModelUser->AllData(),
            'ro16' => $this->ModelKnockout->AllRO16(),
            'qf' => $this->ModelKnockout->AllQF(),
            'sf' => $this->ModelKnockout->AllSF(),
            'final' => $this->ModelKnockout->AllFinal(),

        ];
        return view('template/template', $data);
    }

    //! RO16
    public function InsertRO16()
    {
        $data = [
            'code_ro16' => $this->request->getPost('code_ro16'),
        ];
        $this->ModelKnockout->InsertRO16($data);
        session()->setFlashdata('pesan', 'Berhasil Menambah RO16');
        return redirect()->to(base_url('/knockout'));
    }

    public function UpdateRO16($id_ro16)
    {
        $data = [
            'id_ro16' => $id_ro16,
            'code_ro16' => $this->request->getPost('code_ro16'),
        ];

        $this->ModelKnockout->UpdateRO16($data);
        session()->setFlashdata('pesan', 'Berhasil Mengedit RO16');
        return redirect()->to(base_url('/knockout'));
    }

    public function DeleteRO16($id_ro16)
    {
        $data = [
            'id_ro16' => $id_ro16,
        ];

        $this->ModelKnockout->DeleteRO16($data);
        session()->setFlashdata('pesan', 'Berhasil Menghapus RO16');
        return redirect()->to(base_url('/knockout'));
    }

    //! QF
    public function InsertQF()
    {
        $data = [
            'code_qf' => $this->request->getPost('code_qf'),
        ];
        $this->ModelKnockout->InsertQF($data);
        session()->setFlashdata('pesan', 'Berhasil Menambah QF');
        return redirect()->to(base_url('/knockout'));
    }

    public function UpdateQF($id_qf)
    {
        $data = [
            'id_qf' => $id_qf,
            'code_qf' => $this->request->getPost('code_qf'),
        ];

        $this->ModelKnockout->UpdateQF($data);
        session()->setFlashdata('pesan', 'Berhasil Mengedit QF');
        return redirect()->to(base_url('/knockout'));
    }

    public function DeleteQF($id_qf)
    {
        $data = [
            'id_qf' => $id_qf,
        ];

        $this->ModelKnockout->DeleteQF($data);
        session()->setFlashdata('pesan', 'Berhasil Menghapus QF');
        return redirect()->to(base_url('/knockout'));
    }

    //! SF
    public function InsertSF()
    {
        $data = [
            'code_sf' => $this->request->getPost('code_sf'),
        ];
        $this->ModelKnockout->InsertSF($data);
        session()->setFlashdata('pesan', 'Berhasil Menambah SF');
        return redirect()->to(base_url('/knockout'));
    }

    public function UpdateSF($id_sf)
    {
        $data = [
            'id_sf' => $id_sf,
            'code_sf' => $this->request->getPost('code_sf'),
        ];

        $this->ModelKnockout->UpdateSF($data);
        session()->setFlashdata('pesan', 'Berhasil Mengedit SF');
        return redirect()->to(base_url('/knockout'));
    }

    public function DeleteSF($id_sf)
    {
        $data = [
            'id_sf' => $id_sf,
        ];

        $this->ModelKnockout->DeleteSF($data);
        session()->setFlashdata('pesan', 'Berhasil Menghapus SF');
        return redirect()->to(base_url('/knockout'));
    }

    //! Final
    public function InsertFinal()
    {
        $data = [
            'code_final' => $this->request->getPost('code_final'),
        ];
        $this->ModelKnockout->InsertFinal($data);
        session()->setFlashdata('pesan', 'Berhasil Menambah Final');
        return redirect()->to(base_url('/knockout'));
    }

    public function UpdateFinal($id_final)
    {
        $data = [
            'id_final' => $id_final,
            'code_final' => $this->request->getPost('code_final'),
        ];

        $this->ModelKnockout->UpdateFinal($data);
        session()->setFlashdata('pesan', 'Berhasil Mengedit Final');
        return redirect()->to(base_url('/knockout'));
    }

    public function DeleteFinal($id_final)
    {
        $data = [
            'id_final' => $id_final,
        ];

        $this->ModelKnockout->DeleteFinal($data);
        session()->setFlashdata('pesan', 'Berhasil Menghapus Final');
        return redirect()->to(base_url('/knockout'));
    }
}
