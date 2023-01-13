<?php

namespace App\Http\Controllers;

use App\Models\Branches;
use Illuminate\Http\Request;
use App\Http\Requests\BranchRequest;
use App\Http\Requests\BranchUpdateRequest;
use App\Http\Requests\TqrRequest;
use App\Http\Requests\WqrRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    public function branchstore(BranchRequest $request)
    {

        $BranchObj = new  Branches();

        $W_image = time() . "." . $request->W_add->getClientOriginalName();
        $request->W_add->move(public_path('QR'), $W_image);

        $T_image = time() . "." . $request->T_add->getClientOriginalName();
        $request->T_add->move(public_path('QR'), $T_image);

        $BranchObj->BranchID = $request->BranchID;
        $BranchObj->BranchName = $request->BranchName;
        $BranchObj->W_No = $request->W_No;
        $BranchObj->T_NO = $request->T_NO;
        $BranchObj->W_QR = $W_image;
        $BranchObj->T_QR = $T_image;


        //dd($BranchObj);
        // $BranchObj->save();

        try {
            $data = $request->validated();
            $BranchObj->save();
            return redirect()->back()->with('message', 'New Branch added Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('message', 'somthing went wrong' . $ex);
        }
    }



    public function storeEdtBranch(BranchUpdateRequest $request, $BranchID)
    {
        $BranchObj  = Branches::find($BranchID);


        $BranchObj->BranchID = $request->BranchID;
        $BranchObj->BranchName = $request->BranchName;
        $BranchObj->W_No = $request->W_No;
        $BranchObj->T_NO = $request->T_NO;



        $BranchObj->save();

        try {
            $data = $request->validated();
            $BranchObj->save();
            return redirect()->back()->with('message', 'Template Update Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('message', 'somthing went wrong' . $ex);
        }
    }


    public function storeEdt_WQR(WqrRequest $request, $BranchID)
    {
        $BranchObj  = Branches::find($BranchID);

           if( $request->W_add == true){
           $W_image = time() . "." . $request->W_add->getClientOriginalName();
           $request->W_add->move(public_path('QR'), $W_image);
           $BranchObj->W_QR  = $W_image;
        }

        $BranchObj->W_QR = $W_image;
        $BranchObj->save();

        try {
            $data = $request->validated();
            $BranchObj->save();
            return redirect()->back()->with('message', 'Template Update Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('message', 'somthing went wrong' . $ex);
        }
    }

    public function storeEdt_TQR(TqrRequest $request, $BranchID)
    {
        $BranchObj  = Branches::find($BranchID);



        if( $request->T_add == true){
           $T_image = time() . "." . $request->T_add->getClientOriginalName();
           $request->T_add->move(public_path('QR'), $T_image);
           $BranchObj->T_QR  = $T_image;
        }


        $BranchObj->T_QR = $T_image;


        $BranchObj->save();

        try {
            $data = $request->validated();
            $BranchObj->save();
            return redirect()->back()->with('message', 'Template Update Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('message', 'somthing went wrong' . $ex);
        }
    }


    public function destroy($id)
    {
        $Branch = Branches::find($id);
        $Branch->delete();
        return redirect('Branch-Info');
    }

    public function BranchReport()

    {
        // return view('pages/BranchReport');


        $date = Carbon::now();
        $currentMoth = $date->format('F');

        $totalBranches = DB::table('branches')->count();

        // $totalBranches = Branches::whereMonth('created_at', Carbon::now()->month)->count('BranchName');


        $labels = Branches::whereMonth('created_at', Carbon::now()->month)->get('BranchName');
            $label = array();
            foreach ($labels as $l) {
            array_push($label,$l->BranchName);
            }
            $Bid= Branches::whereMonth('created_at', Carbon::now()->month)->get('id');
            $Bid = array();
            foreach ($Bid as $p) {
            array_push($Bid,$p->id);
        }

        $monthlyAllBranchs = Branches::whereMonth('created_at', Carbon::now()->month)->get();



        return view('pages/BranchReport',['labels' => $label,'Bid' => $Bid])->with('currentMoth',$currentMoth)->with('totalBranches',$totalBranches)->with('monthlyAllBranchs',$monthlyAllBranchs);



    }

    public function BranchPDF(){

        $date = Carbon::now();
        $currentMoth = $date->format('F');

        $totalBranches = DB::table('branches')->count();

        // $label = ['Jan','feb','march','apr'];
        // $price = [23,50,45,12];

        $labels = Branches::whereMonth('created_at', Carbon::now()->month)->get('BranchName');
        $label = array();
        foreach ($labels as $l) {
        array_push($label,$l->BranchName);
        }
        $Bid= Branches::whereMonth('created_at', Carbon::now()->month)->get('id');
        $Bid = array();
        foreach ($Bid as $p) {
        array_push($Bid,$p->id);
    }

    $monthlyAllBranchs = Branches::whereMonth('created_at', Carbon::now()->month)->get();


    return view('pages/BranchPDF',['labels' => $label,'Bid' => $Bid])->with('currentMoth',$currentMoth)->with('totalBranches',$totalBranches)->with('monthlyAllBranchs',$monthlyAllBranchs);


        // return view('Pages/admin/pdfGenarate');

     }


}
