@extends('../layout/' . $layout)

@section('subhead')
    <title>MESSAGE_TEMPLETE</title>
@endsection

@section('subcontent')
    <img src="build/assets/images/logo.png" style="width:200px;height:200px;display:block;margin:auto;padding: auto;"
        alt=" logo">

    <div class="space" style="padding-bottom: 2vh"></div>
    <div class="container">

        <div class="space" style="padding-bottom: 4vh"></div>

        <div class="alert alert-primary" role="alert">
            <h1 style="text-align: center">Customer Report</h1>
        </div>
        <div class="card">

            
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">


                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="users" class="report-box__icon text-pending"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer">
                                                100% <i data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{$totalCus}} </div>
                                    <div class="text-base text-slate-500 mt-1">TOTAL CUSTOMERS</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="user" class="report-box__icon text-success"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer">
                                                74% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{$totalCus}} </div>
                                    <div class="text-base text-slate-500 mt-1">WHATSAPP CUSTOMERS</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="user" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-primary tooltip cursor-pointer">
                                                0%<i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">0</div>
                                    <div class="text-base text-slate-500 mt-1">TELEGRAM CUSTOMER</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="layers" class="report-box__icon text-info"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-primary tooltip cursor-pointer">
                                                10 <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{$totalBranches}}</div>
                                    <div class="text-base text-slate-500 mt-1">BRANCHES</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
            @endsection
