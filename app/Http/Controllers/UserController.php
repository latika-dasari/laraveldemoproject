<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'site_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    public function register(Request $request)
    {

        return view('registration');
    }

    public function addUser(Request $request)
    {     
      
        $post = $request->all();

        $this->validator($request->all())->validate();

        $post['password'] = Hash::make($post['password']);
        $user = User::create($post);

        return redirect('user_list');
    }

    public function user_list()
    {
        $users = User::all();
        // dd($users);
        return view('user-list',['users'=>$users]);
    }

    public function deleteUser($id)
    {
        $users = User::destroy($id);
        return redirect('user_list');
    }

    public function editUser($id)
    {
        $user = User::find($id);

        return view('edit-user', ['user' => $user]);
    }

    public function updateUser(Request $request, $id)
    {

        $post = $request->all();

        if ($post['password'])
            $post['password'] = Hash::make($post['password']);
        else
            $post['password'] = $post['password1'];

        $user = User::find($id);
        $user->update($post);
        return redirect('user_list');
    }
    
}
          