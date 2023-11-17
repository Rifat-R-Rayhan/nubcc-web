<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(UserController::class)->group(function(){
    Route::get('/', 'homePage')->name('home');
    Route::get('/about-us', 'aboutPage')->name('about-us');
    Route::get('/contact', 'contactPage')->name('contact');
    Route::get('/team', 'fullTeamPage')->name('team');
    Route::get('/cr_list', 'fullCrPage')->name('cr_list');
    Route::get('/event', 'eventPage')->name('event');
    Route::get('/album', 'galleryPage')->name('album');
    Route::get('/courses', 'coursePage')->name('courses');
    Route::get('/product', 'productPage')->name('product');
    Route::get('/shirt', 'shirtPage')->name('shirt');
    Route::get('/confirm_order', 'confirmPage')->name('confirm');

    Route::get('/user-registration', 'userRegistrationPage')->name('user-registration');
    Route::post('/nubcc-users', 'userInsert')->name('user-add');
    Route::get('/user-login', 'login')->name('user-login')->middleware('memberAlreadyLogin');
    Route::post('/login-user', 'loginCheck')->name('login-user');
    Route::get('/user-dashboard', 'dashboard')->name('user-dashboard')->middleware('isUserLoggedIn');
    Route::get('/user-logout', 'logout')->name('user-logout');
    Route::get('/user-edit', 'userEdit')->name('user-edit')->middleware('isUserLoggedIn');
    Route::post('/user-update', 'userUpdate')->name('user-update');

    Route::get('/member_registration', 'memberRegistration')->name('member');
    Route::post('/member_registration', 'memberInsert')->name('member_registration');

    Route::get('/cr_registration', 'crRegistration')->name('cr');
    Route::post('/cr_registration', 'crInsert')->name('cr_registration');

    Route::get('/forgot-password', 'forgotPassword')->name('forgot-password');
    Route::post('/forgot-user-password', 'forgotUserPassword')->name('forgot-user-password');
    Route::get('/reset-password/{token}', 'resetPassword')->name('reset-password');
    Route::post('/reset-password-post', 'resetUserPassword')->name('reset-password-post');
});


Route::controller(AdminController::class)->group(function(){
    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware('isLoggedIn');

    Route::get('/users', 'usersTable')->name('users')->middleware('isLoggedIn');
    Route::post('/users', 'userInsert')->name('user_insert')->middleware('isLoggedIn');
    Route::get('/usearch', 'userSearch')->name('user_search');
    Route::get('/udelete', 'userDelete')->name('user_delete')->middleware('isLoggedIn');
    Route::post('/uupdate', 'userConfirmation')->name('user_update')->middleware('isLoggedIn');

    Route::get('/members', 'membersTable')->name('members')->middleware('isLoggedIn');
    Route::post('/members', 'memberInsert')->name('member_insert')->middleware('isLoggedIn');
    Route::get('/msearch', 'memberSearch')->name('member_search');
    Route::get('/mdelete', 'memberDelete')->name('member_delete')->middleware('isLoggedIn');
    Route::get('/medit', 'memberEdit')->name('member_edit')->middleware('isLoggedIn');
    Route::post('/mupdate', 'memberUpdate')->name('member_update')->middleware('isLoggedIn');
    Route::post('/mconfirmation', 'memberConfirmation')->name('member_confirmation')->middleware('isLoggedIn');

    Route::get('/crs', 'crsTable')->name('crs')->middleware('isLoggedIn');
    Route::post('/crs', 'crInsert')->name('cr_insert')->middleware('isLoggedIn');
    Route::get('/csearch', 'crSearch')->name('cr_search');
    Route::get('/cdelete', 'crDelete')->name('cr_delete')->middleware('isLoggedIn');
    Route::get('/cedit', 'crEdit')->name('cr_edit')->middleware('isLoggedIn');
    Route::post('/crupdate', 'crUpdate')->name('cr_update')->middleware('isLoggedIn');
    Route::post('/crconfirmation', 'crConfirmation')->name('cr_confirmation')->middleware('isLoggedIn');

    Route::get('/login', 'login')->name('login')->middleware('alreadyLogin');
    Route::post('/loginUser', 'loginCheck')->name('loginUser');
    Route::get('/logout', 'logout')->name('logout');

    Route::get('/admins', 'adminsTable')->name('admins')->middleware('isLoggedIn');
    Route::post('/admins', 'adminInsert')->name('admin_insert')->middleware('isLoggedIn');
    Route::get('/delete', 'adminDelete')->name('admin_delete')->middleware('isLoggedIn');
    Route::get('/edit', 'adminEdit')->name('admin_edit')->middleware('isLoggedIn');
    Route::post('/update', 'adminUpdate')->name('admin_update')->middleware('isLoggedIn');

    Route::get('/tshirts', 'tShirtsTable')->name('tshirts')->middleware('isLoggedIn');
    Route::post('/tshirts', 'tshirtInsert')->name('tshirt_insert');
    Route::get('/search', 'search')->name('tshirt_search');
    Route::get('/tdelete', 'tshirtDelete')->name('tshirt_delete')->middleware('isLoggedIn');
    Route::post('/tupdate', 'tshirtUpdate')->name('tshirt_update')->middleware('isLoggedIn');
    Route::get('/export', 'export')->name('tshirt_export');

    Route::get('/maintenance', 'underMaintenance')->name('maintenance');

    Route::get('/mail','mail_page')->name('mail_page');
    Route::post('/send_mail','send_mail');

    Route::get('/test','load_test');
});


