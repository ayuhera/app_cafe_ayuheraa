<?php 
namespace App\Models;

use CodeIgniter\Model;

class Detailpesananmodel extends Model{
    protected $table      = 'tb_detail_pesanan';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id'
    protected $primarykey='id';
    protected $allowedFields=['menu_id','pesanan_id','jumlah'];
}