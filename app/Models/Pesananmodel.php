<?php 
namespace App\Models;

use CodeIgniter\Model;

class Pesananmodel extends Model{
    protected $table      = 'tb_pesanan';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id'
    protected $primarykey='id';
    protected $allowedFields=['id','username','tanggal','nama_pemesan','no_meja','total_harga'];
}