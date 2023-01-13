@extends('../layout/' . $layout)

@section('subhead')
    <title>Add New Admin</title>
@endsection

@section('content')
    @if ($errors->any())
    @endif

    <div>
        <ul>
            @if (session('message'))
                <div class="p-3 mb-2 bg-success text-white rounded">{{ session('message') }}</div>
            @endif
        </ul>
    </div>

    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="." class="w-6" src="{{ asset('build/assets/images/logo.png') }}">
                    <span class="text-white text-lg ml-3">
                        OneSmartBee
                    </span>
                </a>
                <div class="my-auto">
                    <img alt="." class="-intro-x w-1/2 -mt-16" src="{{ asset('build/assets/images/welcome.png') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10"><br> New Admin Registation.
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all Customer
                        Token Details in one place</div>
                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->

            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">ADMIN REGISTATION</h2>
                    <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">A few more clicks to
                        Register to your account. Manage all your e-commerce accounts in one place</div>

                    <form method="POST" action="{{ route('RegisterUser') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="intro-x mt-8">
                            <input type="text" Name='Fname' class="intro-x login__input form-control py-3 px-4 block"
                                placeholder="First Name" >
                            <div class=" text-danger">{{ $errors->first('Fname') }}</div>


                            <input type="text" Name='Lname'
                                class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Last Name"
                                >
                            <div class=" text-danger">{{ $errors->first('Lname') }}</div>


                            <input type="email" Name='email'
                                class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Email" >
                            <div class="mt-3">
                                <div class=" text-danger">{{ $errors->first('email') }}</div>



                            </div>
                            <input type="password" Name='password'
                                class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password"
                                >
                            <div class=" text-danger">{{ $errors->first('password') }}</div>
                            <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                            </div>
                            {{-- <a href="" class="intro-x text-slate-500 block mt-2 text-xs sm:text-sm">What is a secure
                                password?</a> --}}
                            {{-- <input type="text" class="intro-x Name=''password_confirmation.requir login__input form-control py-3 px-4 block mt-4"
                                placeholder="Password Confirmation"> --}}
                        </div>

                        <div class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                            <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                            <label class="cursor-pointer select-none" for="remember-me">I agree to the ............</label>
                            <a class="text-primary dark:text-slate-200 ml-1" href="">Privacy Policy</a>.
                        </div>

                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <a href="{{ url('/Current-Token-list-page') }}"><button type="button" class="btn btn-outline-secondary w-24 mr-1">CANSEL</button>
                            </a>
                         <button type="submit" class="btn btn-primary w-24">REGISTER</button>
                        </div>
                    </div>
                </div>
                    </form>
                    <!-- END: Form Layout -->
                </div>
            </div>



                        {{-- <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit"
                                class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">REGISTER</button>


                            <a href="{{ url('/login') }}"> <button
                                    class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">LOGIN</button></a>
                        </div>
                </div>
            </div>

            <!-- END: Register Form -->
        </div>
    </div> --}}
@endsection

@section('script')
    @vite('resources/js/ckeditor-classic.js')
@endsection
