<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Branches;
use Carbon\Carbon;
use App\Models\Customer;
use App\Models\templates;
use App\Models\Messages;
use App\Models\whatsapp_accounts;
use Illuminate\Support\Facades\DB;
use App\Models\message_direction_lookups;
use App\Models\message_content;
use App\Models\Patients;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function W_QRedit($id){
        $Branch = Branches::findorFail($id);
        return view('Pages/W_QR_Update',compact('Branch'));
      }
      public function T_QRedit($id){
        $Branch = Branches::findorFail($id);
        return view('Pages/T_QR_Update',compact('Branch'));
      }

    public function indexTempedit($id){
        $Temp = message_content::findorFail($id);
        return view('Pages/Template-Update',compact('Temp'));
      }

      public function indexBranchedit($id){
        $Branch = Branches::findorFail($id);
        return view('Pages/BranchUpdate',compact('Branch'));
      }


    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function inbox()
    {
        $data = message_content::paginate(7);
        return view('pages/inbox', compact('data'));

    }


    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function NotifyHistory(Request $request)
    {
        if($request->has('searchposta')){
            $searchposta = $request->get('searchposta');
            $data = Messages::where('user_number','like','%'.$searchposta.'%')->orderBy('id', 'ASC')->get();
        }else{
            $data = Messages::orderBy('id', 'ASC')->get();
        }

        $Messages  = Messages::with('getdirection')->get();
        $data  = Messages::paginate(10);
        return view('pages/Notify-History', ['data'=>$data]);


//..............
        // if($request->has('searchposta')){
        //     $searchposta = $request->get('searchposta');
        //     $data = Messages::where('user_number','like','%'.$searchposta.'%')->orderBy('id', 'DESC')->get();
        // }else{
        //     $data = Messages::orderBy('id', 'DESC')->get();
        // }

        // return view('pages/Notify-History',compact('data'));



    }






    public function Customer(Request $request)
    {

        if($request->has('searchposta')){
            $searchposta = $request->get('searchposta');
            $data = Patients::where('phone_number','like','%'.$searchposta.'%')->orderBy('id', 'ASC')->get();
        }else{
            $data = Patients::orderBy('id', 'ASC')->get();
        }


        // $data = Patients::paginate(10);
        return view('pages/Cus-Reg-List', compact('data'));


        $totalCustomers = DB::table('patients')->count();
       // $TotalWhatsappCount = Patients::where('columnName','Lost')->count();
        // $totalBranches = Branches::whereMonth('created_at', Carbon::now()->month)->count('BranchName');





// dd($monthlyAllJobs);
            // $monthlyAllJobs = jobs::whereMonth('created_at', Carbon::now()->month)->count('jobtitle');

        return view('pages/BranchReport',)->with('totalBranches',$totalCustomers);







    }

    // public function calendar()
    // {

    //     $data = message_content::all();
    //     return view('pages/calender', compact('data'));
    // }
    public function calendar()
    {

        return view('pages/calendar');
    }


    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function TokenIsuuedlist()
    // {
    //     return view('pages/Token-Isuued-list');
    // }


    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function UsedTokenList()
    // {
    //     return view('pages/Used-Token-List');
    // }


    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function CurrentTokenlist()
    // {
    //     return view('pages/Current-Token-list');
    // }



    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function BranchInfo(Request $request)

    {
        if($request->has('searchposta')){
            $searchposta = $request->get('searchposta');
            $data = Branches::where('BranchName','like','%'.$searchposta.'%')->orderBy('id', 'ASC')->get();
        }else{
            $data = Branches::orderBy('id', 'ASC')->get();
        }

        return view('pages/Branch-Info',compact('data'));


        // $data = Branches::paginate(10);

    }


    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function QRGenarate()
    {
        return view('pages/QR-Genarate');
    }



    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function chat()
    {
        return view('pages/chat');
    }



    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crudDataList()
    {
        return view('pages/crud_data_list');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function BranchInsert()
    {
        return view('pages/Branch-Insert');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function LoginMedia()
    {
        return view('pages/Login_Media');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function profileOverview1()
    // {
    //     return view('pages/profile-overview-1');
    // }




    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('pages/register');
    }
     /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Signup()
    {
        return view('pages/Signup');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function errorPage()
    {
        return view('pages/welcome');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile()
    {
        return view('pages/update-profile');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {
        return view('pages/change-password');
    }


    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function regularTable()
    {
        return view('pages/regular-table');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function regularForm()
    {
        return view('pages/regular-form');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function fileUpload()
    // {
    //     return view('pages/Template-Update');
    // }



    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createTemp()
    {
        return view('pages/createTemp');
    }

    public function createBranch()
    {
        return view('pages/createBranch');
    }
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Branch_Update()
    {
        return view('pages/BranchUpdate');
    }





}
