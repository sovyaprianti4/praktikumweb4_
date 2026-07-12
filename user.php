<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function login()
    {
        helper(['form']);

        if ($this->request->getMethod() == 'POST') {

            $session = session();
            $model = new UserModel();

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $data = $model->where('username', $username)->first();

            if ($data) {

                if (password_verify($password, $data['userpassword'])) {

                    $session->set([
                        'logged_in' => true,
                        'username'  => $data['username']
                    ]);

                    return redirect()->to('/admin/artikel');

                } else {

                    $session->setFlashdata('error', 'Password salah.');

                }

            } else {

                $session->setFlashdata('error', 'Username tidak ditemukan.');

            }
        }

        return view('user/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/user/login');
    }
}