<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Repositories\Repository;
use App\Http\Requests\UserFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Utilities\PlusInnovResponse;
use JWTFactory;
use JWTAuth;
use App\User;

class UserController extends Controller
{
    
    // space that we can use the repository from
    protected $model;
    
    public function __construct(User $user)
    {
        // set the model
       // $this->model = new Repository($user);
    }
    
    public function register(UserFormRequest $request)
    {
        $data = [];
        $data['email'] = $request->email;
        $data['name']  = $request->name;
        $data['password'] = bcrypt($request->password);
        $user = $this->model->create($data);
        return PlusInnovResponse::successData($user,"");
    }
    
    public function login(UserFormRequest $request)
    {
        // $credentials = $request->only('email', 'password');
        // if ( ! $token = JWTAuth::attempt($credentials)) {
        //     return PlusInnovResponse::error(401,"Invalid Credentials.", 'invalid.credentials');
        // }

        if($request->email == "my@gmail.com")
        return response([
            'token' => "token here",
            'email'=> $request->email
            
        ]);

        else
            return null;
    }
    
    
    public function user(Request $request)
    {
        $user = User::find(Auth::user()->id);
        return PlusInnovResponse::successData($user,"");
    }
    
    public function logout()
    {
        JWTAuth::invalidate();
        return PlusInnovResponse::successData($user,"Logged out Successfully.");
    }

    public function test()
    {
       return response([
        'token' => " my toke",
        'email'=> "my@gmail.com"
        
    ]);
    }
    
    public function refresh()
    {
        return response([
            'status' => 'success',
        ]);
    }
}
