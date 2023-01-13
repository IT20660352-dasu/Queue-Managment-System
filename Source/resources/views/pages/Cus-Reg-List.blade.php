@extends('../layout/' . $layout)

@section('subhead')
<title>CUSTOMER_DETAILS</title>
@endsection

@section('subcontent')

    <h2 class="intro-y text-lg font-medium mt-10">Customer Registation Details</h2>



    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">


            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <form method="get" action="{{ route('Cus-Reg-List') }}">
                <div class="w-56 relative text-slate-500">

                    <input type="text" name="searchposta"  class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
                </form>
            </div>

            <div class="hidden xl:block mx-auto text-slate-500"></div>
            <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">

                <a href="{{ url('/CusReport') }}">
                <button class="btn btn-primary shadow-md mr-2">
                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Genarate Report
                </button></a>
                <div class="dropdown">


                </div>
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">CUSTOMER ID</th>
                        {{-- <th class="whitespace-nowrap">BRANCH NAME</th> --}}
                        <th class="text-center whitespace-nowrap">NAME</th>
                        <th class="text-center whitespace-nowrap">AGE</th>
                        <th class="text-center whitespace-nowrap">CONTACT NO</th>
                        <th class="text-center whitespace-nowrap">MEDIA</th>
                        <th class="text-center whitespace-nowrap">Last Issued Token No</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $CUS)
                        <tr class="intro-x">

                            <td class="w-40 !py-4">
                                <a href=""
                                    class="underline decoration-dotted whitespace-nowrap"> {{ $CUS['id'] }}</a>
                            </td>
                            {{-- <td class="w-40">
                                <a href="" class="font-medium whitespace-nowrap">Mathara</a>

                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">new branch</div>

                            </td> --}}
                            <td class="text-center">
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5"> {{ $CUS['full_name'] }}</div>
                            </td>
                            <td>

                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $CUS['age'] }}</div>

                            </td>
                            <td>
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $CUS['phone_number'] }}</div>
                            </td>
                            <td class="text-center">
                                <div
                                    class="flex items-center justify-center whitespace-nowrap ">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>
                                    <p class="text-success">whatsapp</p>
                                </div>

                            </td>
                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i>QMS23231</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
                        <div class="text-slate-500 mt-2">Do you really want to delete these records? <br>This process
                            cannot be undone.</div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal"
                            class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="button" class="btn btn-danger w-24">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
@endsection
