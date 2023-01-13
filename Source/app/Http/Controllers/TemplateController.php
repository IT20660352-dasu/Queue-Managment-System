<?php

namespace App\Http\Controllers;
use App\Models\message_content;
use Illuminate\Http\Request;
use App\Http\Requests\TempRequest;
use App\Http\Requests\TempUpdateRequest;


class TemplateController extends Controller
{

    public function store(TempRequest $request)
    {

        $TemObj = new  message_content();

       
        $TemObj->content = $request->content;
        $TemObj->msg_type = $request->msg_type;

       // $TemObj->save();

       try {
        $data = $request->validated();
        $TemObj->save();
        return redirect()->back()->with('message','Template added Successfully');
      } catch (\Exception $ex) {
        return redirect()->back()->with('message','somthing went wrong'.$ex);

}

    }

    //  Edit templates Deails ...
    public function storeedtTemp(TempUpdateRequest $request, $id)
    {
        $TempObj  = message_content::find($id);




        $TempObj->content = $request->content;
        $TempObj->msg_type = $request->msg_type;

        $TempObj ->save();

        try {
            $data = $request->validated();
            $TempObj ->save();
            return redirect()->back()->with('message', 'Template Update Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('message', 'somthing went wrong' . $ex);
        }
    }





public function destroy($id)
{
    $Temp = message_content::find($id);
    $Temp ->delete();
    return redirect('/inbox-page');
}
}
