@extends('../layout/' . $layout)

@section('subhead')
    <title>New Message Templete</title>
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
        <h2 class="text-lg font-medium mr-auto">New Message Templete</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            {{-- {{ route('TemStore') }} --}}
            <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}


            <div class="intro-y box p-5">
              

                <div class="mt-3">
                    <label>Message Content</label>
                    <div class="mt-2">

                        {{-- <div class="editor" name='Msg_Content' required> --}}
                    <textarea class="form-control" name="content"id="exampleFormControlTextarea1"placeholder="Your%20Text%20Here" rows="8"></textarea>
                    <div class=" text-danger">{{$errors->first('content')}}</div>

                        </div>
                    </div>

                <div class="mt-3">
                    <label for="crud-form-2"  class="form-label">MSG Type</label>
                    <select data-placeholder="Select your favorite actors" name='msg_type' class="tom-select w-full" id="crud-form-2" multiple>

                        <option value="Text">Text</option>

                        <option value="Image">Image</option>
                    </select>
                    <div class=" text-danger">{{$errors->first('msg_type')}}</div>

                </div>
                <div class="text-right mt-5">
                    <a href="{{ url('/inbox-page') }}"> <button type="button" class="btn btn-outline-secondary w-24 mr-1">Back</button></a>
                    <button type="submit" class="btn btn-primary w-24">ADD</button>
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
