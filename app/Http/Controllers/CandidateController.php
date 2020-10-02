<?php

namespace App\Http\Controllers;

use App\UserRepository;
use Illuminate\Http\Request;
use Model\Candidate\CandidateRepository;


class CandidateController extends Controller
{
    /**
     * @var CandidateRepository
     */
    protected $candidateRepo;

    CONST DEFAULT_AVATAR = 'avatars/generic/user-icon';

    public function __construct(
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

    public function save(Request $request, UserRepository $userRepository)
    {

        try {

            $data = $request->except('_token');
            $user = $userRepository->save([
                'email' => $data['email'],
                'password' => $data['password'],
                'corporate' => false
            ]);

            $data['user_id'] = $user->user_id;
            $data['avatar'] = $this::DEFAULT_AVATAR;
            $data['active'] = true;
            unset($data['password']);

            $this->candidateRepo->save($data);

        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

        toastr()->success('Seu cadastro foi criado com sucesso', 'Sucesso!');
        return redirect()->route('candidate.sign_up');

    }

    function status(Request $request, $id, $type)
    {
        $status = 0;
        if ($type == 'active') {
            $status = 1;
        }
        $this->candidateRepo->changeStatus($id, $status);

        toastr()->success('Sua conta foi desativada', 'Sucesso!');
        return redirect()->route('candidate.sign_up');
    }
}
