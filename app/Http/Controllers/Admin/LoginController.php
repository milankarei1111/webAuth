<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

require_once 'resources/org/code/Code.class.php';

class LoginController extends CommonController
{
    //
    public function login(){
        return view('admin.login');
    }

    public function code()
    {
        $code = new \Code;
        $code->make();
    }

    public function getCode()
    {
       $code = new \Code;
       echo $code->get();
    }

}
