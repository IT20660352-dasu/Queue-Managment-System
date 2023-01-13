@extends('../layout/' . $layout)

@section('subhead')
    <title>Update Profile</title>
@endsection

@section('subcontent')
@if ($message = Session ::get('success'))
<div class="alert alert-success">
    {{$message}}
</div>
@endif
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Update Profile</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">

        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <form action="{{ route('storeedtProfile', $Profile->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Display Information</h2>
                </div>

                <div class="p-5">
                    <div class="flex flex-col-reverse xl:flex-row flex-col">
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">first Name</label>
                                        <input id="update-profile-form-1" type="text" class="form-control" placeholder="first Name" value= {{ $Profile['F_Name'] }} disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-2" class="form-label">Last name</label>
                                        <input id="update-profile-form-1" type="text" class="form-control" placeholder="Last name" value={{ $Profile['L_Name'] }}  disabled>

                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-2" class="form-label">Address</label>
                                        <input id="update-profile-form-1" type="text" class="form-control" placeholder="Address" value={{ $Profile['Address'] }}   disabled>

                                    </div>
                                </div>
                                <div class="col-span-12 2xl:col-span-6">
                                    <div class="mt-3 2xl:mt-0">
                                        <label for="update-profile-form-3" class="form-label">Email</label>
                                        <input id="update-profile-form-1" type="text" class="form-control" placeholder="Email" value={{ $Profile['Email'] }}  disabled>

                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-4" class="form-label">Phone Number</label>
                                        <input id="update-profile-form-1" type="text" class="form-control" placeholder="Phone Number" value={{ $Profile['Phone'] }}  disabled>
                                   </div>
                                </div>
                                <div class="col-span-12">
                                    <div class="mt-3">
                                        <label for="update-profile-form-5" class="form-label">NIC</label>
                                        <input id="update-profile-form-1" type="text" class="form-control" placeholder="NIC" value={{ $Profile['NIC'] }} disabled>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('/update-profile-page')}}">  <button type="button" class="btn btn-primary w-40 mt-6">Edit Profile</button></a>
                        </div>
                        <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                            <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img class="rounded-md" alt="."  src="{{ asset('Profile/' . $Profile->image_id) }}">
                                    <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                        <i data-lucide="x" class="w-4 h-4"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END: Display Information -->
           </div>
    </div>
@endsection
