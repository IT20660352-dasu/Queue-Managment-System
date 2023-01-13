@extends('../layout/' . $layout)

@section('subhead')
    <title>Update Branch Details</title>
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
        <h2 class="text-lg font-medium mr-auto">Update Branch Details</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->

            <form action="{{ route('storeEdtBranch',$Branch->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}


            <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">BRANCH ID</label>
                    <input id="crud-form-1" name="BranchID" type="text" class="form-control w-full" value="{{  $Branch->BranchID}}" placeholder="Input text" >
                    <div class=" text-danger">{{$errors->first('BranchID')}}</div>

                </div>

                <div>
                    <label for="crud-form-1" class="form-label">BranchName </label>
                    <input id="crud-form-1" name="BranchName" type="text" class="form-control w-full" value="{{  $Branch->BranchName }}" placeholder="Input text" >
                    <div class=" text-danger">{{$errors->first('BranchName')}}</div>

                </div>
                <div>
                    <label for="crud-form-1" class="form-label">Whatsapp No</label>
                    <input id="crud-form-1"  type="number" name="W_No" class="form-control w-full" value="{{  $Branch->W_No}}" placeholder="Input text" >
                    <div class=" text-danger">{{$errors->first('W_No')}}</div>

                </div>
                    <div>
                        <label for="crud-form-1" class="form-label">Telegrame NO</label>
                        <input id="crud-form-1" name="T_NO" type="number" class="form-control w-full" value="{{  $Branch->T_NO}}" placeholder="Input text" >
                        <div class=" text-danger">{{$errors->first('T_NO')}}</div>

                    </div>

                    {{-- <div>
                        <label for="crud-form-1" class="form-label">WHATSAPP QR</label>
                        <input id="crud-form-1"value="{{ $Branch->W_QR }}" name="W_add" type="file" class="form-control w-full"
                            placeholder="Input text">
                        <div class=" text-danger">{{ $errors->first('W_add') }}</div>
                    </div> --}}
                    {{-- <div>
                        <label for="crud-form-1" class="form-label">TELEGRAM QR </label>
                        <input id="crud-form-1" value="{{ $Branch->T_add }}" name="T_add"type="file" class="form-control w-full"
                            placeholder="Input text">
                        <div class=" text-danger">{{ $errors->first('T_add') }}</div>
                    </div> --}}

                <div class="text-right mt-5">
                    <a href="{{ url('/Branch-Info') }}"><button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    </a>
                 <button type="submit" class="btn btn-primary w-24">UPDATE</button>
                </div>
            </div>
        </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection

@section('script')
    @vite('resources/js/ckeditor-classic.js')
@endsection
