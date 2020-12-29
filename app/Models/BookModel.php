<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'book';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'pengarang', 'penerbit', 'jmlhal', 'tahun', 'filebuku', 'sampul'];

    public function getBook($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        // $builder = $this->table('orang');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('book')->like('judul', $keyword)->orLike('tahun', $keyword);
    }
}
