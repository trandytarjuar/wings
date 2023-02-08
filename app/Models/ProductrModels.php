<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductrModels extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table("product");
    }
    public function all()
    {
        $this->builder->select("*");
        // $this->builder->where("user",$username);
        $builder = $this->builder->get();
        return $builder;
        $builder->getResult();
    }
    public function save_product($data)
    {
        return $this->db->table("product")->insert($data);
    }
}