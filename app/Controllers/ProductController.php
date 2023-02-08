<?php

namespace App\Controllers;

use App\Models\ProductrModels;

class ProductController extends BaseController
{
    public function __construct()
    {
        $this->product = new ProductrModels();
    }
    public function index()
    {
        $product = $this->product->all();
        $result = $product->getResult();
        // var_dump($result[0]); die;
        $data['prooduct'] = $result;
        return view("product/index",$data);
    }

    public function add()
    {
        // $no = 1;
        // $nop = $no++;
        // var_dump($nop); die;
        $productname = $this->request->getVar("productname");

        $price = $this->request->getVar("price");
        $currency = $this->request->getVar("currency");
        $discount = $this->request->getVar("discount");
        $dimension = $this->request->getVar("dimension");
        $unit = $this->request->getVar("unit");
        
        $data = [
            // "product_code"=>$productname.$no++,
            "product_name"=> $productname,
            "currency"  =>$currency,
            "discount"  => $discount,
            "price"  => $price,
            "dimension"  => $dimension,
            "unit"  => $unit,

        ];
        $this->product->save_product($data);
        // var_dump($data); die;
    }
}