<?php namespace App\Models;

use CodeIgniter\Model;

class Program_Studi_Model extends Model {


    private $table = 'prodi';
    

    public function get() {
        

        return $db->table('prodi')->get();
    }
}