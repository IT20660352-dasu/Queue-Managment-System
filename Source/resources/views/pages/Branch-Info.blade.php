@extends('../layout/' . $layout)

@section('subhead')
<title>BRANCH_DETAILS</title>
@endsection

@section('subcontent')
@if ($message = Session ::get('success'))
<div class="alert alert-success">
    {{$message}}
</div>
@endif
<h2 class="intro-y text-lg font-medium mt-10">Branch Contact List</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">


        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <form method="get" action="{{ route('Branch-Info') }}">
            <div class="w-56 relative text-slate-500">

                <input type="text" name="searchposta"  class="form-control w-56 box pr-10" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
            </div>
            </form>
        </div>

        <div class="hidden xl:block mx-auto text-slate-500"></div>
        <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
            <a href="{{ url('/createBranch') }}">
            <button class="btn btn-primary shadow-md mr-2">
                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i>Add New Branch
            </button></a>
            <a href="{{ url('/BranchReport') }}">
            <button class="btn btn-primary shadow-md mr-2">
                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Genarate Report
            </button></a>
            <div class="dropdown">


            </div>
        </div>
    </div>
   
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-1 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">

                <thead>
                    <tr>
                        <th class="whitespace-nowrap">BRANCH ID</th>
                         <th class="whitespace-nowrap">BRANCH NAME</th>
                        <th class="text-center whitespace-nowrap">Whatsapp No</th>
                        <th class="text-center whitespace-nowrap">Telegram No</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                        <th class="whitespace-nowrap">Whatsapp QR</th>
                        <th class="whitespace-nowrap">Telegram QR</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $Branch)

                        <tr class="intro-x">
                            <td class="w-40 !py-4">
                                <a href=""

                                    class="underline decoration-dotted whitespace-nowrap">  {{ $Branch['BranchID'] }}</a>
                                </td>

                            <td class="text-center">

                                <a href="" class="font-medium whitespace-nowrap"> {{ $Branch['BranchName'] }}</a>

                            </td>
                            <td class="text-center"> {{ $Branch['W_No'] }}</td>

                            <td class="text-center">{{ $Branch['T_NO'] }} </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a href="/BranchUpdate/{{$Branch->id}}" class="flex items-center mr-3" href="javascript:;">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                    </a>



                                    <form onsubmit="return confirm('Do You Really Want TO delete ?');"method="POST" action="/BranchInfo/{{$Branch->id}}"  accept-charset="UTF-8" style="display:inline">
                                        {{-- <form onsubmit="return confirm('Do You Really Want TO delete ?');" method="POST" action="/applicant/{{$Applicant->id}}" accept-charset="UTF-8" style="display:inline"> --}}

                                            {{-- {{csrf_feild()}} --}}
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="flex items-center text-danger">
                                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                        </form>
                                </div>
                            </td>

                            <td class="table-report__action w-56">
                                <div class="center">

                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <a href="{{ route('W_QR_Update', $Branch->id) }}" class="flex items-center mr-3" href="javascript:;">
                                        <img alt=""  class="flex items-center mr-3" src="{{ asset('QR/' . $Branch->W_QR) }}">
                                        </a>
                                    </div>

                                    {{-- <a href="{{ route('W_QR_Update', $Branch->id) }}" class="flex items-center mr-3" href="javascript:;">
                                        <i data-lucide="space" class="w-4 h-4 mr-1"></i>
                                        <button type="submit" class="flex items-center text-success">
                                        <i data-lucide="qr-code" class="w-4 h-4 mr-1"></i> Preview</button>

                                    </a> --}}
                                </div>
                            </td>

                            <td class="table-report__action w-56">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <a href="{{ route('T_QR_Update', $Branch->id) }}" class="flex items-center mr-3" href="javascript:;">
                                         <img alt=""  class="flex items-center mr-3" src="{{ asset('QR/' . $Branch->T_QR) }}" >
                                        </a>
                                    </div>
                                    {{-- <a href="{{ route('T_QR_Update', $Branch->id) }}" class="flex items-center mr-3" href="javascript:;">

                                        <i data-lucide="space" class="w-4 h-4 mr-1"></i>
                                        <button type="submit" class="flex items-center text-success">
                                          <i data-lucide="qr-code" class="w-4 h-4 mr-1"></i> Preview</button>
                                    </a> --}}
                                </div>
                            </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div></div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        {{-- {{$data->render()}} --}}
        <!-- END: Pagination -->
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-slate-500 mt-2">Do you really want to delete these records? <br>This process cannot be undone.</div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <form method="POST" action="/BranchInfo/{{$Branch->id}}"  accept-charset="UTF-8" style="display:inline">

                        @csrf
                        @method('delete')
                        <a href="{{ url('/Branch-Info') }}"><button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button></a>
                        <button type="submit" class="btn btn-danger w-24">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
    @endsection
