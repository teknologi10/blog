<?php

namespace App\Controllers;


class Auth extends BaseController
{
    public function index()
    {

        return view('login');

        // echo view('admin/footer');
    }

    public function verif()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $login = $this->db->table('user')->where('email', $email)->where('password', $password)->get()->getRowArray();
        // $this->session->set($login);       

        if (!empty($login)) {

            $this->session->set($login);
            return redirect()->to(base_url('/admin'));
        } else {
            session()->setFlashdata('pesan', 'Kombinasi email dan Password Salah');
            return redirect()->to('/blog/login')->withInput();
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        // session_destroy();
        return redirect()->to(base_url());
    }
}
