@extends('../layout/' . $layout)

@section('subhead')
    <title>TOKEN_DETAILS</title>
@endsection

@section('subcontent')
    <h2 class="intro-y text-lg font-medium mt-10">Token Issuance Details</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">


            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <form method="get" action="{{ route('Token-Isuued-list') }}">
                <div class="w-56 relative text-slate-500">

                    <input type="text" name="searchposta"  class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
                </form>
            </div>

            <div class="hidden xl:block mx-auto text-slate-500"></div>
            <div class="w-full xl:w-auto flex items-center mt-3 xl:mt-0">
                <button class="btn btn-primary shadow-md mr-2">
                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel
                </button>
                <button class="btn btn-primary shadow-md mr-2">
                    <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF
                </button>
                <div class="dropdown">


                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>

                        {{-- <th class="text-center whitespace-nowrap">BRANCH NAME</th> --}}
                        <th class="text-center whitespace-nowrap">PATIENT</th>
                        {{-- <th class="text-center whitespace-nowrap">DOCTOR</th> --}}
                        <th class="text-center whitespace-nowrap">DATE & TIME</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="text-center whitespace-nowrap">MEDIA</th>
                        <th class="text-center whitespace-nowrap">Last Issued Token No</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $Token)
                        <tr class="intro-x">


                            {{-- <td class="text-center">
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Galle</div>
                            </td> --}}

                            <td>
                                <a href="javascript:;" id="show-user" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"
                                    data-url="{{ route('users.show', $Token->id) }}"
                                    class="btn btn-info">{{ $Token->getPatient['phone_number'] }}</a>
                            </td>
                            {{-- <td class="text-center">
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5"> {{ $Token['doctor_id'] }}
                                </div>
                            </td> --}}
                            <td class="text-center">
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5"> {{ $Token['created_at'] }}
                                </div>
                            </td>

                            <td class="text-center">
                                <div class="flex items-center justify-center whitespace-nowrap ">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>
                                    <p class="text-warning">Issued</p>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="flex items-center justify-center whitespace-nowrap ">
                                    <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>
                                    <p class="text-success">whatsapp</p>
                                </div>
                            </td>
                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-primary whitespace-nowrap mr-5" href="javascript:;">
                                        <i data-lucide="check-square"
                                            class="w-4 h-4 mr-1"></i>QMS0{{ $Token['token_number'] }}
                                    </a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$data->render()}}
        <!-- END: Data List -->

    </div>
     <!-- BEGIN: Delete Confirmation Modal -->
     <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">

                        <div class="text-3xl mt-5">Patient Details</div>
                        <div class="text-slate-500 mt-2">Name  :  {{ $Token->getPatient['full_name'] }}</div>
                        <div class="text-slate-500 mt-2">Age  :  {{ $Token->getPatient['age'] }}</div>
                        <div class="text-slate-500 mt-2">Phone No   :   {{ $Token->getPatient['phone_number'] }}</div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal"
                            class="btn btn-outline-secondary w-24 mr-1">Ok</button>
                        <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- END: Delete Confirmation Modal -->
@endsection
