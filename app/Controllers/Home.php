<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\HTTP\Request;

class Home extends BaseController
{
	protected $bookModel;

	public function __construct()
	{

		$this->bookModel = new BookModel();
	}

	public function index()
	{
		// $data['title'] = 'Login';
		return view('auth/login');
	}

	public function register()
	{
		// $data['title'] = 'Registrasi';
		return view('auth/register');
	}

	public function user()
	{
		return view('user/index');
	}

	public function read($slug)
	{
		$data = [
			'title' => 'Membaca Buku',
			'book' => $this->bookModel->getBook($slug)
		];

		return view('home/readbook', $data);
	}

	//--------------------------------------------------------------------

}
