<?php

namespace App\Http\Controllers;

use App\UserRepository;
use Model\Company\CompanyRepository;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * @var CompanyRepository
     */
    protected $companyRepo;

    public function __construct(
        CompanyRepository $companyRepo
    )
    {
        $this->companyRepo = $companyRepo;
    }

    public function index()
    {
        return view('user.index');
    }

    public function new()
    {
        return view('company.signup');
    }

    public function save(Request $request, UserRepository $userRepository)
    {
        try {

            $data = $request->except('_token');
            $user = $userRepository->save([
                'email' => $data['email'],
                'password' => $data['password'],
                'corporate' => true
            ]);

            $data['user_id'] = $user->user_id;
            $data['active'] = true;
            unset($data['password']);

            $this->companyRepo->save($data);

        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

        toastr()->success('Seu cadastro foi criado com sucesso', 'Sucesso!');
        return redirect()->route('company.sign_up');

    }

    function status(Request $request, $id, $type)
    {
        $status = 0;
        if ($type == 'active') {
            $status = 1;
        }
        $this->companyRepo->changeStatus($id, $status);

        toastr()->success('Sua conta foi desativada', 'Sucesso!');
        return redirect()->route('company.sign_up');
    }
}
