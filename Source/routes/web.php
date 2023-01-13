<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QRController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\RegisterrController;
use App\Http\Controllers\CusController;

// Route::controller(AuthController::class)->middleware('loggedin')->group(function () {
//     Route::get('login', 'loginView')->name('login.index');
//     Route::post('login', 'login')->name('login.check');
// });

Route::controller(AuthController::class)->middleware('loggedin')->group(function () {

    Route::get('login', 'loginView')->name('login.index');
    Route::post('login', 'login')->name('login.check');
    // Route::get('register-page', 'register')->name('register');
});

Route::middleware('auth')->group(function () {

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    // Route::get('register-page', [AuthController::class, 'AddAccount'])->name('AddAccount');

    Route::controller(PageController::class)->group(function () {
        Route::get('register-page', 'register')->name('register');
        Route::post('register-page', [RegisterrController::class, 'RegisterUser'])->name('RegisterUser');

        Route::get('/', [TokenController::class, 'TokenIsuuedlist'])->name('Token-Isuued-list');
        //retview Token Ishuued list
        Route::get('Token-Isuued-list-page', [TokenController::class, 'TokenIsuuedlist'])->name('Token-Isuued-list');
        //retview Token Ishuued list
        Route::get('Current-Token-list-page', [TokenController::class, 'CurrentTokenlist'])->name('Current-Token-list');
        //retview Token Ishuued list
        Route::get('Used-Token-List-page', [TokenController::class, 'UsedTokenList'])->name('Used-Token-List');

        // Route::get('Current-Token-list-page', 'CurrentTokenlist')->name('Current-Token-list');
        // Route::get('Used-Token-List-page', 'UsedTokenList')->name('Used-Token-List');
        Route::get('Used-Token-List-page/{id}', [TokenController::class, 'showCus'])->name('users.show');
        //Route::get('Cus-Reg-List-page', 'CusRegList')->name('Cus-Reg-List');
        Route::get('Login_Media-page', 'LoginMedia')->name('Login_Media');

        //QR geanerate
        Route::get('QR-Genarate-page', 'QRGenarate')->name('QR-Genarate');
        Route::post('QR-Genarate-page', [QRController::class, 'QRgenarate'])->name('QRgenarate');


        // Route::post('/getQR', [BranchController::class, 'QRstore'])->name('QRstore');

        //Route::get('profile-overview-1', 'profileOverview1')->name('profile-overview-1');
        Route::get('login-page', 'login')->name('login');

        Route::get('Signup-page', 'Signup')->name('Signup');
        Route::get('welcome-page', 'errorPage')->name('welcome');
        Route::get('update-profile-page', 'updateProfile')->name('update-profile');
        Route::get('change-password-page', 'changePassword')->name('change-password');

        //Route::get('Notify-History-page', 'NotifyHistory')->name('Notify-History');


       //delete Admin
       Route::delete('/profile-overview-1/{id}', [AuthController::class, 'destroy']);



        Route::get('profile-overview-1', [ProfileController::class, 'ProfileInfo'])->name('profile-overview-1');
        //edit
        //  Route::get('/update-profile/{id}', [ProfileController::class, 'storeedtProfile'])->name('BranchUpdate');



        //Branch Details......................................................
        Route::get('/createBranch', [PageController::class, 'createBranch']);
        //create
        Route::post('/saveBranch', [BranchController::class, 'branchstore'])->name('branchstore');
        //retview
        Route::get('Branch-Info', [PageController::class, 'BranchInfo'])->name('Branch-Info');
        //delete
        Route::delete('/BranchInfo/{id}', [BranchController::class, 'destroy']);
        //edit
        Route::get('/BranchUpdate/{id}', [PageController::class, 'indexBranchedit'])->name('BranchUpdate');
        //save-edit
        Route::post('/BranchUpdate/{id}', [BranchController::class, 'storeEdtBranch'])->name('storeEdtBranch');
        //edit whatsapp QR
        Route::get('/W_QR_Update/{id}', [PageController::class, 'W_QRedit'])->name('W_QR_Update');
        //save-edit-w-QR
        Route::post('/W_QR_Update/{id}', [BranchController::class, 'storeEdt_WQR'])->name('storeEdt_WQR');
        //edit whatsapp QR
        Route::get('/T_QR_Update/{id}', [PageController::class, 'T_QRedit'])->name('T_QR_Update');
        //branch report
        Route::get('/BranchReport', [BranchController::class, 'BranchReport'])->name('BranchReport');
        //genarate pdf
        Route::get('/BranchPDF', [BranchController::class, 'BranchPDF'])->name('BranchPDF');

        //save-edit-w-QR
        Route::post('/T_QR_Update/{id}', [BranchController::class, 'storeEdt_TQR'])->name('storeEdt_TQR');


       // Route::get('calendar-page', 'calendar')->name('calendar');
         //retview
         Route::get('calendar-page', [PageController::class, 'calendar'])->name('calendar');
        //retview customer details
         Route::get('Cus-Reg-List-page', [PageController::class, 'Customer'])->name('Cus-Reg-List');
         //retview customer details
         Route::get('CusReport', [CusController::class, 'CusReport'])->name('CusReport');

        //retview messages
        Route::get('Notify-History-page', [PageController::class, 'NotifyHistory'])->name('Notify-History');
        //Message Templates...................................................

        Route::get('/createTemp', [PageController::class, 'createTemp']);
        //create
        Route::post('/saveTemp', [TemplateController::class, 'store'])->name('store');
        //retview
        Route::get('inbox-page', [PageController::class, 'inbox'])->name('inbox');
        //retview
        Route::get('celender-page', [PageController::class, 'msg_content'])->name('msg_content');
        //delete
        Route::delete('/inbox/{id}', [TemplateController::class, 'destroy']);
        //edit
        Route::get('/TempUpdate/{id}', [PageController::class, 'indexTempedit'])->name('TempUpdate');
        //save-edit
        Route::post('/TempUpdate/{id}', [TemplateController::class, 'storeedtTemp'])->name('storeedtTemp');

        Route::get('regular-table-page', 'regularTable')->name('regular-table');
    });
});
