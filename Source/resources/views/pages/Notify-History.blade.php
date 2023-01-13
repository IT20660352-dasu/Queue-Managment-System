@extends('../layout/' . $layout)

@section('subhead')
<title>Messages</title>
@endsection

@section('subcontent')
    <h2 class="intro-y text-lg font-medium mt-10">Customer Notification Details</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap xl:flex-nowrap items-center mt-2">

            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <form method="get" action="{{ route('Notify-History') }}">
                <div class="w-56 relative text-slate-500">

                    <input type="text" name="searchposta"  class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                      </div>
                </form>
            </div>
            {{-- <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <form method="get" action="{{ route('Notify-History') }}">
                <div class="w-56 relative text-slate-500">

                    <input type="text" name="searchposta"  class="form-control w-56 box pr-10" placeholder="Search Patient No...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
                </form>
            </div> --}}


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


                        <th class="text-center whitespace-nowrap">PATIENT_NO</th>
                        <th class="text-center whitespace-nowrap">BUSSNESS_NO</th>
                        <th class="text-center whitespace-nowrap">SENT DATE&TIME</th>
                        <th class="text-center whitespace-nowrap">DELIVERD_DATE&TIME</th>
                        <th class="text-center whitespace-nowrap">READ_DATE&TIME</th>

                        <th class="text-center whitespace-nowrap">CONTENT</th>
                        <th class="text-center whitespace-nowrap">DIRECTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $MSG)
                        <tr class="intro-x">
                            <td class="text-center">
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                     {{-- {{ $MSG->getUser['phone_number'] }} --}}
                                     {{ $MSG['user_number'] }}
                                    </div>
                            </td>
                            <td class="text-center">
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                    {{-- {{ $MSG->getB['phone_number'] }} --}}
                                    {{ $MSG['busuness_number'] }}
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">  {{ $MSG['delivered_time'] }}</div>
                            </td>
                            <td class="text-center">
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">   {{ $MSG['sent_time'] }}</div>
                            </td>
                            <td class="text-center">
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5"> {{ $MSG['sent_time'] }}</div>
                            </td>


                            <td class="table-report__action">
                                        <a href="{{ url('/inbox-page') }}"
                                class="underline decoration-dotted whitespace-nowrap"> {{  $MSG->content_id }}</a>
                            </td>


                            {{-- <div class="flex items-center justify-center whitespace-nowrap {{ $MSG['true_false'][0] ? 'text-success' : 'text-pending' }}">
                                <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $MSG['true_false'][0] ? 'Whatsapp' : 'Telegram' }}
                            </div> --}}

                            <td class="table-report__action">
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                    {{ $MSG->getdirection['direction'] }}</div>

                                {{-- <a href="" class="font-medium whitespace-nowrap">{{ $MSG['messages'][0]['direction'] }}</a>
                                @if ($MSG['true_false'][0])
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Ohio, Ohio</div>
                                @else
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">California, LA</div>
                                @endif --}}

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        {{$data->render()}}
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
    <script>
        function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }
          }
        }
        </script>
@endsection

{{-- <div class="w-64 sm:w-auto truncate">
    <span class="inbox__item--highlight">{{ $faker['news'][0]['super_short_content'] }}</span> {{ $faker['news'][0]['short_content'] }}
</div> --}}
