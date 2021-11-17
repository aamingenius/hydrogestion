<?php 
namespace App\Controllers;

use App\Models\JaugeageModel;

class Moheli extends BaseController{

	public function index(){
		## Fetch all records
      	$jaugeage = new JaugeageModel();
      	$data['jaugeage'] = $jaugeage->like('cuve', 'MOHELI')->findAll();
      	$page = ['page_title' => 'Etat Moheli',
      			'item' => 'moheli'
      			];
      	 
    echo view('templates/header',$page);
            echo view('Moheli/item',$data);
            echo view('jaugeage/table',$data);
            //echo view('dashboard/graphe',$data);
            echo view('dashboard/dashboard',$data);
            
        echo view('templates/footer');
	}

	 

	  
}