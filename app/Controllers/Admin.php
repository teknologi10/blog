<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;

class Admin extends BaseController
{
    public function index()
    {
        if (empty(session('email'))) {
            session()->setFlashdata('pesan', 'Silahkan login terlebih dahulu!!');
            return redirect()->to(base_url('/blog/login'));
        }

        $data['berita'] = $this->db->table('berita')->get()->getResultArray();
        // dd($data);
        return view('admin/index', $data);
    }

    public function save_blog()
    {
        // dd($this->request->getFile('thumb'));
        $thumb = $this->request->getFile('thumb');
        $namathumb = $thumb->getRandomName();
        $banner = $this->request->getFile('banner');
        $namabanner = $banner->getRandomName();
        $thumb->move('img/', $namathumb);
        $banner->move('img/', $namabanner);
        $this->db->table('berita')
            ->set('judul', $this->request->getVar('judul'))
            ->set('deskripsi', $this->request->getVar('deskripsi'))
            ->set('kreator', session('nama'))
            ->set('waktu', date('Y-m-d'))
            ->set('banner', $namabanner)
            ->set('thumb', $namathumb)
            ->insert();
        return redirect()->to(base_url('/admin'));
    }

    public function edit_blog($id)
    {
        $this->db->table('berita')
            ->set('judul', $this->request->getVar('judul'))
            ->set('deskripsi', $this->request->getVar('deskripsi'))
            ->set('kreator', session('nama'))
            ->set('waktu', date('Y-m-d'))
            ->where('id', $id)
            ->update();
        return redirect()->to(base_url('/admin'));
    }

    public function hapus_blog($id)
    {
        $d = $this->db->table('berita')->where('id', $id)->get()->getRowArray();
        if ($d > 0) {
            unlink('img/' . $d['thumb']);
            unlink('img/' . $d['banner']);
        }
        $this->db->table('berita')->where('id', $id)->delete();
        return redirect()->to(base_url('/admin'));
    }
}
