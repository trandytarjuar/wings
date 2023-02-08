<?php
namespace App\Models;
use CodeIgniter\Model;

class OrderdetailModel extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table("transaction_detail");
    }
    public function add($data)
    {
        return $this->db->table("transaction_detail")->insert($data);
    }
    public function updatecart($data1,$result_code)
    {
        // return $this->db->table("transaction_detail")->insert($data1);
        return $this->db->table('transaction_detail')->update($data1, array('product_code' => $result_code));
    }
    public function all()
    {
        $this->builder->select("max(document_number)as kode");
        // $this->builder->where("product_code",$id);
        // $this->builder->where("user",$username);
        $builder = $this->builder->get();
        return $builder;
        $builder->getResult();
    }
    // public function all($id)
    // {
    //     $this->builder->select("*");
    //     $this->builder->where("product_code",$id);
    //     // $this->builder->where("user",$username);
    //     $builder = $this->builder->get();
    //     return $builder;
    //     $builder->getResult();
    // }
}