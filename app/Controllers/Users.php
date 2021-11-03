<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class Users extends Controller
{
   

    public function index()
{
   
}

	public function login(){

		echo view('users/login');

	}

}