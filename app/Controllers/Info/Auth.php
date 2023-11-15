<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->ModelAuth = new ModelAuth;
    }

    public function Login()
    {
        $data = [
            'title' => 'Login',
        ];
        return view('auth/login', $data);
    }

    public function Register()
    {
        $data = [
            'title' => 'Register',
            'value' => $this->ModelAuth->AllData(),
        ];
        return view('auth/register', $data);
    }

    public function ValidRegister()
    {
        if ($this->validate([
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],
            'repassword' => [
                'label' => 'Retype Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} Wajid Diisi!!',
                    'matches' => '{field} Harus Sama Dengan Password!!'
                ]
            ],
            'tgl_lahir' => [
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],
            'telp' => [
                'label' => 'Nomor Handphone',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],
            'jenkel' => [
                'label' => 'Jenis Kelamin',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi'
                ]
            ],
        ])) {
            $data = [
                'nama' => $this->request->getPost('nama'),
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
                'telp' => $this->request->getPost('telp'),
                'jenkel' => $this->request->getPost('jenkel'),
                'role' => '4',
            ];
            $this->ModelAuth->ValidRegister($data);
            session()->setFlashdata('pesan', 'Registrasi Berhasil');
            return redirect()->to(base_url('/login'));
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/register'));
        }
    }

    public function ValidLogin()
    {
        if (
            $this->validate([
                'username' => [
                    'label' => 'Username',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Masih Kosong!!'
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Masih Kosong!!'
                    ]
                ],
            ])
        ) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $valid_login = $this->ModelAuth->ValidLogin($username, $password);
            if ($valid_login) {
                session()->set('id_user', $valid_login['id_user']);
                session()->set('nama', $valid_login['nama']);
                session()->set('username', $valid_login['username']);
                session()->set('password', $valid_login['password']);
                session()->set('role', $valid_login['role']);
                session()->set('tgl_lahir', $valid_login['tgl_lahir']);
                session()->set('telp', $valid_login['telp']);
                session()->set('jenkel', $valid_login['jenkel']);
                if ($valid_login['role'] == '1') {
                    return redirect()->to(base_url('/profile'));
                } elseif ($valid_login['role'] == '2') {
                    return redirect()->to(base_url('/profile'));
                } elseif ($valid_login['role'] == '3') {
                    return redirect()->to(base_url('/profile'));
                } elseif ($valid_login['role'] == '4') {
                    return redirect()->to(base_url('/profile'));
                }
            } else {
                session()->setFlashdata('gagal', 'Username atau Password Salah!!');
                return redirect()->to(base_url('/login'));
            }
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('/login'))->withInput('validation', \Config\Services::validation());
        }
    }

    public function Logout()
    {
        session()->destroy();
        // session()->remove('id_user');
        // session()->remove('nama');
        // session()->remove('username');
        session()->remove('password');
        // session()->remove('role');
        // session()->remove('tgl_lahir');
        // session()->remove('telp');
        // session()->remove('jenkel');
        session()->setFlashdata('pesan', 'Berhasil Logout');
        return redirect()->to(base_url('/login'));
    }
}
