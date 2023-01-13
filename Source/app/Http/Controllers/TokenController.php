<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointment;
use App\Models\Patients;


class TokenController extends Controller
{

    public function TokenIsuuedlist(Request $request)

    {
        {


            $data = appointment::whereHas('getPatient',function($query) use ($request) {
                if(!empty($request->searchposta)){
                    $query->where('phone_number', 'like', '%' . $request->searchposta . '%');
                }
            })->paginate(10);
            return view('pages/Token-Isuued-list', compact('data'));
        }


    }



public function showCus($id)

{
    $Token = Patients::find($id);
    return response()->json($Token);

}

    public function CurrentTokenlist()
    {
        $appointment  = appointment::with('getPatient')->get();

        $data  = appointment::paginate(10);
            return view('pages/Current-Token-list', ['data'=>$data]);


    }
    public function UsedTokenList(Request $request)
    {

        $data = appointment::whereHas('getPatient',function($query) use ($request) {
            if(!empty($request->searchposta)){
                $query->where('phone_number', 'like', '%' . $request->searchposta . '%');
            }
        })->paginate(10);



        return view('pages/Used-Token-List', ['data'=>$data]);

    }
}
