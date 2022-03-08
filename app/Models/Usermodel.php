<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usermodel extends Model{
    protected $table      = 'tb_user';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id'
    protected $primarykey='id';
    protected $allowedFields=['nama','username','password','role'];
}