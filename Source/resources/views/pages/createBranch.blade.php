@extends('../layout/' . $layout)

@section('subhead')
    <title>New Branch</title>
@endsection

@section('subcontent')
@if($errors->any())
@endif

<div >
    <ul>
        @if(session('message'))
        <div class="p-3 mb-2 bg-success text-white rounded">{{ session('message') }}</div>

        @endif
    </ul>
 </div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">UPLOAD NEW BRANCH</h2>
    </div>
    <div class="grid grid-cols-12  gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <form method="POST" action="{{ route('branchstore') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
            <!-- BEGIN: Form Layout -->
         <div class="intro-y box p-5 ">
                <div>
                    <label for="crud-form-1" class="form-label">BRANCH ID</label>
                    <input id="crud-form-1" name="BranchID" type="text" class="form-control w-full" placeholder="Input text">
                    <div class=" text-danger">{{$errors->first('BranchID')}}</div>
                </div>
                <div>
                    <label for="crud-form-1" class="form-label">BRANCH NAME </label>
                    <input id="crud-form-1" name="BranchName" type="text" class="form-control w-full" placeholder="Input text">
                    <div class=" text-danger">{{$errors->first('BranchName')}}</div>
                </div>
                <div>
                    <label for="crud-form-1" class="form-label">WHATSAPP NO</label>
                    <input id="crud-form-1" name="W_No" type="number" class="form-control w-full" placeholder="Input text">
                    <div class=" text-danger">{{$errors->first('W_No')}}</div>
                </div>
                <div>
                    <label for="crud-form-1" class="form-label">TELEGRAM NO</label>
                    <input id="crud-form-2" name="T_NO" type="number" class="form-control w-full" placeholder="Input text">
                    <div class=" text-danger">{{$errors->first('T_NO')}}</div>
              </div>
                <div>
                    <label for="crud-form-1" class="form-label">WHATSAPP QR</label>
                    <input id="crud-form-1"name="W_add" type="file" class="form-control w-full" accept="image/jpg, image/jpeg, image/png"placeholder="Input text">
                    <div class=" text-danger">{{$errors->first('W_add')}}</div>
                </div>
                <div>
                    <label for="crud-form-1" class="form-label">TELEGRAM QR </label>
                    <input id="crud-form-1" name="T_add" type="file" class="form-control w-full"accept="image/jpg, image/jpeg, image/png" placeholder="Input text">
                    <div class=" text-danger">{{$errors->first('T_add')}}</div>
                </div>





                <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="Submit" class="btn btn-primary w-24">Save</button>
                </div>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection

@section('script')
    @vite('resources/js/ckeditor-classic.js')
@endsection
