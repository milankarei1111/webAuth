<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Lib\Code\Code;

class LoginController extends CommonController
{
    //
    public function login(Request $request)
    {
        $data = $request->all();
        if($data) {
            $code = new Code;
           if($data['code'] != $code->get()){
             return back()->with('msg', '驗證碼錯誤')->withInput($request->except('password'));
           }
        } else {
            return view('admin.login');
        }
    }

    public function code()
    {
        $code = new Code;
        $code->make();
    }
}
