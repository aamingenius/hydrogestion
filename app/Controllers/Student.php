<?php

namespace App\Controllers;

class Student extends BaseController
{
    public $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
      
        // $this->db = db_connect();
    }

    public function uploadStudent()
    {
        if ($this->request->getMethod() == "post") {

            $file = $this->request->getFile("file");

            $file_name = $file->getTempName();

            $student = array();
            $itemArray = "";

            $csv_data = array_map('str_getcsv', file($file_name));

            /*echo '<pre>' . var_export($csv_data[1], true) . '</pre>';
            echo '</br>';
            $itemArray= implode(" ",$csv_data[1]);
            echo "itemArray = ".$itemArray;
            $studentItem=explode(";", $itemArray);
            echo '<pre>' . var_export($studentItem, true) . '</pre>';*/

            if (count($csv_data) > 0) {



                $index = 0;

                foreach ($csv_data as $data) {
 
                    if ($index > 0) {

                        /*$student[] = array(
                            "name" => $data[0],
                            "email" => $data[0],
                            "mobile" => $data[0],
                            "designation" => $data[0],
                        );*/
                        echo '<pre>' . var_export($data[0], true) . '</pre>';
                    } 
                    $index++;
                }
                

                // $builder = $this->db->table('tbl_students');

                // $builder->insertBatch($student);

                // $session = session();

                // $session->setFlashdata("success", "Data saved successfully");

                //return redirect()->to(base_url('upload-student'));
            }
        }

        return view("upload-file");
    }
}