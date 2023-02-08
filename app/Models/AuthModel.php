<?php
namespace App\Models;
use CodeIgniter\Model;

class AuthModel extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table("login");
    }
    public function cek($username)
    {
        $this->builder->select("*");
        $this->builder->where("user",$username);
        
      

        $builder= $this->builder->get();
        //  var_dump($builder);die;
         return $builder;
         $builder->getResult();
    }
    public function signup($data)
    {
        return $this->db->table("login")->insert($data);
    }
}