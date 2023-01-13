<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Request\LoginRequest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginView()
    {
        return view('login.main', [
            'layout' => 'login'
        ]);
    }

    public function register()
    {
        return view('login.register', [
            'layout' => 'login'
        ]);
    }
    public function RegisterStore(RegisterRequest $request)
    {

        $Reg = new  User();

        $Reg->Fname = $request->Fname;
        $Reg->Lname = $request->Lname;
        $Reg->email = $request->email;
        $Reg->role = $request->role;
        $Reg->password = $request->password;


        try {
            $data = $request->validated();
            $Reg->save();
            return redirect()->back()->with('message', 'User added Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('message', 'somthing went wrong' . $ex);
        }
    }
    public function Registration(Request $request)
    {
        $request->validate([
            'Fname' => 'requird',
            'Lname'=> 'requird',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role'=> 'required'
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->withSuccess('You have registered');
    }


    public function create(array $data)
    {
      return User::create([
        'Fname' => $data['Fname'],
        'Lname' => $data['Lname'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'role'=> $data['role']
      ]);
    }
    /*
    *
     * Authenticate login user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        if (!\Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            throw new \Exception('Wrong email or password.');
        }
    }

    /**
     * Logout user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        \Auth::logout();
        return redirect('login');
    }
    public function destroy($id)
    {
        $Admin = User::find($id);
        $Admin->delete();
        return redirect('profile-overview-1');
    }
}
