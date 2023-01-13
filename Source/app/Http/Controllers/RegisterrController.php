<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;



class RegisterrController extends Controller
{

    public function RegisterUser(RegisterRequest $request)
    {

        $Reg = new  User();

        $Reg->Fname = $request->Fname;
        $Reg->Lname = $request->Lname;
        $Reg->email = $request->email;

        // $Reg->user()->fill([
        //     'password' => Hash::make($request->Password)
        // ])->save();
        $Reg->password = Hash::make($request->password);



        try {
            $data = $request->validated();
            $Reg->save();
        return redirect()->back()->with('message', 'User added Successfully');
        } catch (\Exception $ex) {
            // dd ( $ex->getMessage());
            return redirect()->back()->with('message', 'somthing went wrong' . $ex);
        }


    }
}
