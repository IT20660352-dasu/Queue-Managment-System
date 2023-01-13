@extends('../layout/' . $layout)

@section('subhead')
<title>LOGIN_DETAILS</title>
@endsection

@section('subcontent')
    <h2 class="intro-y text-lg font-medium mt-10">Customer Login Media Information</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">
            <div class="flex w-full sm:w-auto">
                <div class="w-48 relative text-slate-500">
                    <input type="text" class="form-control w-48 box pr-10" placeholder="Search by invoice...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
                <select class="form-select box ml-2">
                    <option>BRANCH NAME</option>
                    <option>WHATSAPP</option>
                    <option>TELEGRAM</option>
                    <option>PRINTER</option>
                </select>
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
        <!-- BEGIN: Users Layout -->
       <!-- BEGIN: Data List -->
       <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">BRANCH ID</th>
                    <th class="whitespace-nowrap">BRANCH NAME</th>
                    <th class="text-center whitespace-nowrap">DATE</th>
                    <th class="text-center whitespace-nowrap">WHATSAPP</th>
                    <th class="text-center whitespace-nowrap">TELEGRAM</th>
                    <th class="text-center whitespace-nowrap">PRINTER</th>

                </tr>
            </thead>
            <tbody>
                @foreach (array_slice($fakers, 0, 5) as $faker)
                    <tr class="intro-x">

                        <td class="w-40 !py-4">
                            <a href=""
                                class="underline decoration-dotted whitespace-nowrap">{{ '#INV-' . $faker['totals'][0] . '807556' }}</a>
                        </td>
                        <td class="w-40">
                            <a href="" class="font-medium whitespace-nowrap">{{ $faker['users'][0]['name'] }}</a>
                            @if ($faker['true_false'][0])
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Ohio, Ohio</div>
                            @else
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">California, LA</div>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">25 March 2022</div>
                        </td>
                        <td class="text-center">{{ $faker['stocks'][0000] }}</td>
                        <td class="text-center">{{ $faker['totals'][000] }}</td>

                        <td class="text-center">{{ $faker['stocks'][000] }}</td>


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
