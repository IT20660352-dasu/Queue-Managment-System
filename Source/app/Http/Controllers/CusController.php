<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Patients;
use App\Models\Branches;

class CusController extends Controller
{
    public function CusReport()
    {



        $date = Carbon::now();
        $currentMoth = $date->format('F');

        $totalCus = DB::table('patients')->count();
        $totalBranches = DB::table('branches')->count();



        //  $monthlyAllCus = DB::table('patients')->get();


        //  return view('pages/CusReport',[])->with('currentMoth',$currentMoth)->with('totalCus',$totalCus)->with('monthlyAllBranchs',$monthlyAllCus);
  return view('pages/CusReport')->with('currentMoth',$currentMoth)->with('totalCus',$totalCus)->with('totalBranches',$totalBranches);

        }
}
