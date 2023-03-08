<?php

namespace App\Controllers;

use Dompdf\Options;
use TCPDF;

class Blog extends BaseController
{
    public function index()
    {
        $data['berita'] = $this->db->table('berita')->get()->getResultArray();
        $data['web'] = 'Blog';
        return view('blog/index', $data);
    }

    public function login()
    {
        $data['web'] = 'Blog';
        return view('login', $data);
    }

    public function blog_detail($id)
    {
        $data['konten'] = $this->db->table('berita')->where('id', $id)->get()->getRowArray();
        if (empty($data['konten'])) {
            return redirect()->to(base_url('/blog'));
        }
        $data['berita'] = $this->db->table('berita')->limit(4)->orderBy('id', 'desc')->get()->getResultArray();
        $data['web'] = 'Blog';
        return view('blog/blog_detail', $data);
    }
}
