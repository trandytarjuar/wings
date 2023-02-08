<?php

namespace App\Controllers;

use App\Models\AuthModel;

class SignupController extends BaseController
{
    public function __construct()
    {
        $this->regis = new AuthModel();
    }
    public function index()
    {
        helper(['form']);
        // var_dump("tes"); die;
        return view('auth/register');
    }
    public function submit()
    {
        $session = session();
        $username = $this->request->getVar("username");
        $password = $this->request->getVar("password");

        // if(empty($username)){
        // var_dump("tes");
        // if (isset($username)) {
        //     $session->setFlashdata('msg', 'username sudah ada');
        //     return redirect()->to(base_url("signup"));
        // }
        if (isset($username)) {
            $session->setFlashdata('msg', 'username sudah ada');
            return redirect()->to(base_url("signup"));
        }else{
            $data = [
                "user" => $username,
                "password" => md5($password)
            ];
            $this->regis->signup($data);
        }

        
        return redirect()->to(base_url("auth"));
         
        // }else{
        //     // var_dump("masuk"); die;
        //     $session->setFlashdata('msg','username sudah ada');
        //     return redirect()->to(base_url("signup"));

        // }





    }
}
