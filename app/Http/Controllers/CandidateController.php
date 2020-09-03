<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Model\Candidate\Candidate;
use Model\Candidate\CandidateRepository;


class CandidateController extends Controller
{
    /**
     * @var CandidateRepository
     */
    protected $candidateRepo;

    public  function  __construct(
        CandidateRepository $candidateRepo
    )
    {
        $this->candidateRepo = $candidateRepo;
    }


    public function index()
    {
        return view('user.index');
    }

    public function new()
    {
        return view('candidate.signup');
    }

    public function save(Request $request){

            $data = $request->except('_token');
            $data['user_id'] = 1;
            $data['active'] = 1;
            $this->candidateRepo->save($data);

//        return redirect()->route('candidate.sign_up');
          return view('layouts.success',['msg' =>  'CADASTRO COM SUCESSO']);
    }
}
