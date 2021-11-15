<?php

namespace App\Controllers;
use App\Models\Users;
class Dashboard extends BaseController
{
    public function index()
    {
    	 
    	## Fetch all records
      	$users = new Users();
      	$data['users'] = $users->findAll();
         $page = ['page_title' => 'Dashboard',
      			'item' => 'dashboard'
      			];

        echo view('templates/header',$page);

            echo view('templates/item',$data, );
             echo view('dashboard/table',$data, );
            echo view('dashboard/graphe',$data, );
            echo view('dashboard/dashboard',$data, );
        echo view('templates/footer');
    }

    // File upload and Insert records
	public function importFile(){

     	// Validation
	    $input = $this->validate([
	        'file' => 'uploaded[file]|max_size[file,1024]|ext_in[file,csv],'
	    ]);

     	if (!$input) { // Not valid
         	$data['validation'] = $this->validator; 

         	return view('dashboard/index',$data); 
     	}else{ // Valid

         	if($file = $this->request->getFile('file')) {
            	if ($file->isValid() && ! $file->hasMoved()) {
            		  
               		// Get random file name
               		$newName = $file->getRandomName(); 

               		// Store file in public/csvfile/ folder
               		$file->move('csvfile', $newName);
               			
               		// Reading file
               		$file = fopen("csvfile/".$newName,"r");
               		$i = 0;
               		$numberOfFields = 6; // Total number of fields

               		$importData_arr = array();
                  $itemArray = array();
                  $item = array();
     				
     				// Initialize $importData_arr Array
                	while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                   		$num = count($filedata);
                   		

                   		if($i > 0 ){  // Skip first row & check number of fields
                       
		                     $importData_arr[$i] = $filedata[0];
                          
                  		   $item = explode(';',$importData_arr[$i]);
                         $itemArray[$i]['cuve'] = $item[0];
                         $itemArray[$i]['date'] = $item[1];
                         $itemArray[$i]['produit'] = $item[2];
                         $itemArray[$i]['debut_compteur'] = $item[3];
                         $itemArray[$i]['distribuer'] = $item[4];
                         $itemArray[$i]['fin_compteur'] = $item[5];
                          
                           
                   		}
                   
                   		$i++;
                 
                	}

                	fclose($file); 
                  echo '<pre>' . var_export($itemArray, true) . '</pre>';
                  

	                // Insert data
	                $count = 0;
	                foreach($itemArray as $jaugeagedata){
	                    $jaugeage = new Jaugeage();

	                    // Check record
	                    $checkrecord = $jaugeage->where('cuve',$jaugeagedata['cuve'])->countAllResults();

	                    if($checkrecord == 0){

	                        ## Insert Record
	                        if($jaugeage->insert($jaugeagedata)){
	                           $count++;
	                        }
	                    }
	                    
	                }
                
               		// Set Session
               		session()->setFlashdata('message', $count.' Record inserted successfully!');
               		session()->setFlashdata('alert-class', 'alert-success');

            	}else{
	               // Set Session
	               session()->setFlashdata('message', 'File not imported.');
	               session()->setFlashdata('alert-class', 'alert-danger');
	            }
	        }else{
	            // Set Session
	            session()->setFlashdata('message', 'File not imported.');
	            session()->setFlashdata('alert-class', 'alert-danger');
	        }

     	}
  
     	return redirect()->route('/'); 
   	}
}
