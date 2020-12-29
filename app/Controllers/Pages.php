<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\HTTP\Request;

class Pages extends BaseController
{
    protected $bookModel;

    public function __construct()
    {

        $this->bookModel = new BookModel();
    }

    public function index()
    {
        // $currentPage = $this->request->getVar('page_book') ? $this->request->getVar('page_book') : 1;

        // $cari = $this->request->getVar('cari');
        // if ($cari) {
        //     $book = $this->bookModel->search($cari);
        // } else {
        //     $book = $this->bookModel;
        // }

        $data = [
            'title' => 'ARTIFICIAL LIB',
            'book' => $this->bookModel->getBook()
        ];

        return view('home/utama', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Tentang Kami'
        ];

        return view('home/about', $data);
    }

    public function berita()
    {
        $data = [
            'title' => 'Berita',

        ];

        return view('home/berita', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('auth/login', $data);
    }

    public function ytfav()
    {
        $data = [
            'title' => 'Penghargaan'
        ];

        return view('reward/ytfav', $data);
    }

    public function penfav()
    {
        $data = [
            'title' => 'Penghargaan'
        ];

        return view('reward/penfav', $data);
    }

    public function bukbes()
    {
        $data = [
            'title' => 'Penghargaan'
        ];

        return view('reward/bukbes', $data);
    }

    public function penbaik()
    {
        $data = [
            'title' => 'Penghargaan'
        ];

        return view('reward/penbaik', $data);
    }

    public function perbaik()
    {
        $data = [
            'title' => 'Penghargaan'
        ];

        return view('reward/perbaik', $data);
    }

    public function bukbaik()
    {
        $data = [
            'title' => 'Penghargaan'
        ];

        return view('reward/bukbaik', $data);
    }

    public function allbook()
    {
        $data = [
            'title' => 'Semua Buku',
            'book' => $this->bookModel->getBook()
        ];

        return view('home/allbook', $data);
    }

    public function readbk($slug)
    {
        $data = [
            'title' => 'Membaca Buku',
            'book' => $this->bookModel->getBook($slug)
        ];

        return view('home/readbook', $data);
    }

    //--------------------------------------------------------------------

}
