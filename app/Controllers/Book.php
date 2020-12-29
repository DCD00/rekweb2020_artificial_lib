<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\HTTP\Request;

class Book extends BaseController
{
    protected $bookModel;

    public function __construct()
    {

        $this->bookModel = new BookModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_book') ? $this->request->getVar('page_book') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $book = $this->bookModel->search($keyword);
        } else {
            $book = $this->bookModel;
        }

        $data = [
            'title' => 'Daftar Buku',
            //'book' => $this->bookModel->getBook(),
            'book' => $book->paginate(2, 'book'),
            'pager' => $this->bookModel->pager,
            'currentPage' => $currentPage
        ];

        return view('book/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Buku',
            'book' => $this->bookModel->getBook($slug)
        ];


        return view('book/detail', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Buku',
            'validation' => \Config\Services::validation()
        ];

        return view('book/create', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[book.judul]',
                'errors' => [
                    'required' => '{field} book harus diisi.',
                    'is_unique' => '{field} book sudah terdaftar.'
                ]
            ],
            'pengarang' => [
                'rules' => 'required[book.pengarang]',
                'errors' => [
                    'required' => '{field} book harus diisi.'
                ]
            ],
            'penerbit' => [
                'rules' => 'required[book.penerbit]',
                'errors' => [
                    'required' => '{field} book harus diisi.'
                ]
            ],
            'jmlhal' => [
                'rules' => 'required[book.jmlhal]',
                'errors' => [
                    'required' => '{field} book harus diisi.'
                ]
            ],
            'tahun' => [
                'rules' => 'required[book.tahun]',
                'errors' => [
                    'required' => '{field} book harus diisi.'
                ]
            ],
            'filebuku' => [
                'rules' => 'max_size[filebuku,10240]|ext_in[filebuku,pdf]',
                'errors' => [
                    'max_size' => 'Ukuran file terlalu besar',
                    'ext_in' => 'Yang anda pilih bukan file pdf'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {

            return redirect()->to('/book/create')->withInput();
        }

        // ambil buku
        $fileBk = $this->request->getFile('filebuku');
        // apakah tidak ada buku yang diupload
        if ($fileBk->getError() == 4) {
            $namaBk = 'defaultfile.pdf';
        } else {
            // generate nama buku random
            $namaBk = $fileBk->getRandomName();
            // pindahkan file ke folder buku
            $fileBk->move('buku', $namaBk);
        }

        // ambil gambar
        $fileSampul = $this->request->getFile('sampul');
        // apakah tidak ada gambar yang diupload
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'default.png';
        } else {
            // generate nama sampul random
            $namaSampul = $fileSampul->getRandomName();
            // pindahkan file ke folder img
            $fileSampul->move('img', $namaSampul);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->bookModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'pengarang' => $this->request->getVar('pengarang'),
            'penerbit' => $this->request->getVar('penerbit'),
            'jmlhal' => $this->request->getVar('jmlhal'),
            'tahun' => $this->request->getVar('tahun'),
            'filebuku' => $namaBk,
            'sampul' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/book');
    }

    public function delete($id)
    {
        // cari gambar berdasarkan id
        $book = $this->bookModel->find($id);

        // cek jika file nya defaultFile.pdf
        if ($book['filebuku'] != 'defaultfile.pdf') {
            // hapus gambar
            unlink('buku/' . $book['filebuku']);
        }

        // cek jika file gambar nya default.png
        if ($book['sampul'] != 'default.png') {
            // hapus gambar
            unlink('img/' . $book['sampul']);
        }

        $this->bookModel->delete($id);
        //session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/book');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Book',
            'validation' => \Config\Services::validation(),
            'book' => $this->bookModel->getBook($slug)
        ];

        return view('book/edit', $data);
    }

    public function update($id)
    {
        // cek judul
        $bookLama = $this->bookModel->getbook($this->request->getVar('slug'));
        if ($bookLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[book.judul]';
        }

        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} book harus diisi.',
                    'is_unique' => '{field} book sudah terdaftar.'
                ]
            ],
            'filebuku' => [
                'rules' => 'max_size[filebuku,10240]|ext_in[filebuku,pdf]',
                'errors' => [
                    'max_size' => 'Ukuran file terlalu besar',
                    'ext_in' => 'Yang anda pilih bukan file pdf'
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/book/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileBk = $this->request->getFile('filebuku');

        // cek file, apakah tetap file lama
        if ($fileBk->getError() == 4) {
            $namaBk = $this->request->getVar('filebukuLama');
        } else {
            // generate nama file random
            $namaBk = $fileBk->getRandomName();
            // pindahkan file
            $fileBk->move('buku', $namaBk);
            // hapus file yang lama
            unlink('buku/' . $this->request->getVar('filebukuLama'));
        }

        $fileSampul = $this->request->getFile('sampul');

        // cek gambar, apakah tetap gambar lama
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            // generate nama file random
            $namaSampul = $fileSampul->getRandomName();
            // pindahkan gambar
            $fileSampul->move('img', $namaSampul);
            // hapus file yang lama
            unlink('img/' . $this->request->getVar('sampulLama'));
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->bookModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'pengarang' => $this->request->getVar('pengarang'),
            'penerbit' => $this->request->getVar('penerbit'),
            'jmlhal' => $this->request->getVar('jmlhal'),
            'tahun' => $this->request->getVar('tahun'),
            'filebuku' => $namaBk,
            'sampul' => $namaSampul
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/book');
    }
}
