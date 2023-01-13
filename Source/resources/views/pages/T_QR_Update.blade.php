@extends('../layout/' . $layout)

@section('subhead')
    <title>Update Telegram QR Code</title>
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
        <h2 class="text-lg font-medium mr-auto">Update Telegram QR Code</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-3">
            <div class="intro-y box p-5">
                <img src="{{ asset('QR/' .  $Branch->T_QR) }}" height="300" wight="300"class="card-img-top"
                                alt="QR images">


            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-3">
            <!-- BEGIN: Form Layout -->



                <form action="{{ route('storeEdt_TQR',$Branch->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

            <div class="intro-y box p-5">

                    <div>
                        <label for="crud-form-1" class="form-label">TELEGRAM QR </label>
                        <input id="crud-form-1" value="" name="T_add"type="file" class="form-control w-full"
                            placeholder="Input text">
                        <div class=" text-danger">{{ $errors->first('T_add') }}</div>
                    </div>

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
