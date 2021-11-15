<?php 
namespace App\Models;

use CodeIgniter\Model;

class JaugeageModel extends Model
{
    protected $table = 'jaugeage'; 
    protected $primaryKey = 'id';

    protected $returnType = 'array';
protected $allowedFields = [ 'date','cuve','produit','debut_compteur','sorti','entre','fin_compteur','code'];
    protected $useTimestamps = false;

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}