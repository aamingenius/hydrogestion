<?php 
namespace App\Controllers;

use App\Models\JaugeageModel;

class Aeroport extends BaseController{

	public function index(){
		## Fetch all records
      	$jaugeage = new JaugeageModel();
      	$data['jaugeage'] = $jaugeage->like('cuve', 'AEROPORT')->findAll();
      	$page = ['page_title' => 'Etat Aeroport',
      			'item' => 'aeroport'
      			];
      	 
    echo view('templates/header',$page);
            echo view('Aeroport/item',$data);
            echo view('jaugeage/table',$data);
            //echo view('dashboard/graphe',$data);
            echo view('dashboard/dashboard',$data);
            
        echo view('templates/footer');
	}

	 

	  
}