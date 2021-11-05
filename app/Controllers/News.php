<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{
   

    public function index()
{
  $model = new NewsModel();

    $data = [
        'news'  => 'ok',
        'title' => 'News archive',
    ];

    echo view('templates/header', $data);
    echo view('news/overview', $data);
    echo view('templates/footer', $data);
}

	public function login(){

		echo view('users/login');

	}

 //    public function view($slug = null)
	// {
	//     $model = new NewsModel();

	//     $data['news'] = $model->getNews($slug);

	//     if (empty($data['news']))
	//     {
	//         throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
	//     }

	//     $data['title'] = $data['news']['title'];

	//     echo view('templates/header', $data);
	//     echo view('news/view', $data);
	//     echo view('templates/footer', $data);
	// }
}