<?php

namespace App\Controllers;

use App\Models\ProductrModels;
use App\Models\OrderdetailModel;

class DashboardController extends BaseController
{
    public function __construct()
    {
        $this->product = new ProductrModels();
        $this->order = new OrderdetailModel();
    }
    public function index()
    {
        $product = $this->product->all();
        $result = $product->getResult();
       
        // $price= $result[0]->price;
        // $diskon = $result[0]->discount;
        // $t_diskon=$diskon/100;
        // $diskoon = $price*$t_diskon;
        // $harga_diskon = $price-$diskoon;
        // $data['diskon'] = $harga_diskon;
        $data['product']= $result;
        return view('index',$data);
    }
    public function cart($id)
    {
        // $document_number =001;
        // $result_code = $get_prod[0]->kode;
        // var_dump($result_code); die;
        // $nourut = substr($document_number,2); 

        $no =sprintf("%03s", $nourut);
        // var_dump($no++); die;
        $currency =$this->request->getVar("currency");
        $price =$this->request->getVar("price");
        $unit =$this->request->getVar("unit");
        
        $no= $document_number+001;
        // var_dump($no); die;
        $quantity ="1";
        // while($quantity <=100){
        //     var_dump($quantity++); die;
        // }
        $subtotal = $quantity*$price;
        // var_dump($document_number++);  die;
        $data = [
            "document_code"=>"TRX",
            "document_number"=>$no,
            "product_code"=>$id,
            "price"=>$price,
            "currency"=>$currency,
            "unit"=>$unit,
            "sub_total"=>$subtotal,
            "quantity"=>$quantity,

        ];
        // var_dump($data); die;
        $this->order->add($data);
        // if(empty($data))
        // {
        // $product = $this->order->all($id);
        // $get_prod= $product->getResult();
        // var_dump($get_prod); die;
        // $result_code = $get_prod[0]->product_code;
        // if($id== $result_code){
        //     $quan = "1";
        //     $quant = $quantity+$quan;
        //     $sub = $quant*$price;
        //     $data1 = [
        //         "quantity" =>$quant,
        //         "sub_total"=>$sub,
        //     ];
        //     $this->order->updatecart($data1,$result_code);
        //     // var_dump($data1); die;
        // }}
       
    }
}
