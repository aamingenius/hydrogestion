<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('dashboard/item');
        echo view('dashboard/graphe');
        echo view('dashboard/table');
        echo view('dashboard');
        echo view('templates/footer');
    }
}
