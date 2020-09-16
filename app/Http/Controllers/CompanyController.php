<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    private $companyRepo;

    public function index()
    {
        return view('user.index');
    }

    public function new()
    {
        return view('company.signup');
    }

    public function save(Request $request){

        $data = $request->except('_token');
        $data['user_id'] = 1;
        $data['active'] = 1;
        $this->companyRepo->save($data);

//        return redirect()->route('company.sig_nup');
        return view('layouts.success',['msg' =>  'CADASTRO COM SUCESSO']);
    }
}
