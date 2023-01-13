<?php

namespace App\Http\Controllers;
use App\Models\Profiles;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function storeProfile(Request $request)
    {
        $ProfleObj = new Profiles;

        $imageName = time() . "." . $request->imageadd->getClientOriginalName();
        $request->imageadd->move(public_path('profile'), $imageName);

        $ProfleObj->F_Name = $request->F_Name;
        $ProfleObj->L_Name = $request->L_Name;
        $ProfleObj->Address = $request->Address;
        $ProfleObj->Email = $request->Email;
        $ProfleObj->Phone = $request->Phone ;
        $ProfleObj->NIC= $request->NIC;
        $ProfleObj->image_id = $imageName;

        //  $jobObj->save();


        //dd($jobObj);

        try {
            $data = $request->validated();
            $ProfleObj->save();
            return redirect()->back()->with('message', 'job added Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('message', 'somthing went wrong' . $ex);
        }

    }

    public function ProfileInfo()

    {
        $data = User::paginate(5);
        return view('pages/profile-overview-1', compact('data'));


    }

     //  Edit Jobs Deails ...
  public function storeedtProfile(Request $request, $id){
    $ProfleObj  = Profiles::find($id);

    if( $request->imageadd == true){
     $imageName = time() . "." . $request->imageadd->getClientOriginalName();
     $request->imageadd->move(public_path('thumbnails'), $imageName);
     $ProfleObj->image_id  = $imageName;
    }


    $ProfleObj->F_Name = $request->F_Name;
    $ProfleObj->L_Name = $request->L_Name;
    $ProfleObj->Address = $request->Address;
    $ProfleObj->Email = $request->Email;
    $ProfleObj->Phone = $request->Phone ;
    $ProfleObj->NIC= $request->NIC;
    $ProfleObj->image_id = $imageName;
     try {
       $data = $request->validated();
       $ProfleObj->save();
       return redirect()->back()->with('message','Post Update Successfully');
     } catch (\Exception $ex) {
       return redirect()->back()->with('message','somthing went wrong'.$ex);
     }
 }
}
