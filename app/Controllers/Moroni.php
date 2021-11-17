<?php 
namespace App\Controllers;

use App\Models\JaugeageModel;

class Moroni extends BaseController{

	public function index(){
		## Fetch all records
      	$jaugeage = new JaugeageModel();
      	$data['jaugeage'] = $jaugeage->like('cuve', 'MORONI')->findAll();
      	$page = ['page_title' => 'Etat Moroni',
      			'item' => 'moroni'
      			];
      	 
    echo view('templates/header',$page);
            echo view('Moroni/item',$data);
            echo view('jaugeage/table',$data);
            //echo view('dashboard/graphe',$data);
            echo view('dashboard/dashboard',$data);
            
        echo view('templates/footer');
	}

	 

	  
}