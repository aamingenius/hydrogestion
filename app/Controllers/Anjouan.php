<?php 
namespace App\Controllers;

use App\Models\JaugeageModel;

class Anjouan extends BaseController{

	public function index(){
		## Fetch all records
      	$jaugeage = new JaugeageModel();
      	$data['jaugeage'] = $jaugeage->like('cuve', 'ANJOUAN')->findAll();
      	$page = ['page_title' => 'Etat Anjouan',
      			'item' => 'anjouan'
      			];
      	 
    echo view('templates/header',$page);
            echo view('Anjouan/item',$data);
            echo view('jaugeage/table',$data);
            //echo view('dashboard/graphe',$data);
            echo view('dashboard/dashboard',$data);
            
        echo view('templates/footer');
	}

	 

	  
}