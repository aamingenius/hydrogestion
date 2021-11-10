<?php 
namespace App\Models;

use CodeIgniter\Model;

class Jaugeage extends Model
{
    protected $table = 'jaugeage'; 
    protected $primaryKey = 'id';

    protected $returnType = 'array';
protected $allowedFields = ['cuve', 'date','produit','debut_compteur','sorti','entre','fin_compteur'];
    protected $useTimestamps = false;

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}