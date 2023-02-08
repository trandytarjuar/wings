<?php

namespace App\Controllers;
use App\Models\AuthModel;

class AuthController extends BaseController
{
    public function __construct()
    {
        $this->auth = new AuthModel();
    }
    public function index()
    {
        helper(['form']);
        // var_dump("tes"); die;
        return view('auth/login');
    }
    public function login()
    {
        $session = session();
        // $auth = new AuthModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        // var_dump($usename); die;
        $login = $this->auth->cek($username);
        $result = $login->getResult();
        // $first = $result->first();
        // var_dump($result[0]); die;
        // $dataAuth = $result->first();
        // var_dump($dataAuth); die;
        if($result){
            $pass = $result[0]->password;
            $verify_pass = $pass == md5($password);

            if($verify_pass){
                $ses_data = [
                    'id' => $result[0]->id,
                    'username' => $result[0]->user,
                    // 'fullname' => $dataAuth->fullname,
                    // 'email'    => $dataAuth->email,
                    'logged_in' => TRUE,
                    'authenticated' => true
                ];
              
                // var_dump($ses_data); die;
                $session->set($ses_data);
                return redirect()->to(base_url("/"));
            }else{
                // var_dump("1"); die;
                $session->setFlashdata('msg','Wrong Password');
                return redirect()->to(base_url("auth"));
            }
           
        }else{
            $session->setFlashdata('msg','wrong username');
            return redirect()->to(base_url("auth"));
        }

    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url("auth"));   
    }
}
