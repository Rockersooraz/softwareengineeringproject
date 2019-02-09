<?php
use Illuminate\Support\Facades\INPUT;
use Illuminate\Support\Facades\Auth;
use App\Merchant;
use App\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/' ,'Homecontroller');

Route::resource('/home' ,'Homecontroller');
// Route::resource('/post','PostController');
// Route::get('/advertisement','HomeController@show')->name('merchant.show');
//admin related routes

// Route::get('admin/merchant/detail','admin\AdminController@index')->name('admin.merchant.detail');
// Route::get('admin/merchant/create','admin\AdminController@create')->name('admin.merchant.create');
// Route::post('admin/merchant/store','admin\AdminController@store')->name('admin.merchant.store');
Route::any('/search','SearchController@search');
Route::get('/privacy','StaticpagesController@privacy')->name('privacy');
Route::get('/terms','StaticpagesController@terms')->name('terms');
Route::get('search/detail/{id}','SearchController@detail')->name('searchdetail');
Route::resource('merchant/profile','Merchant\MerchantProfileController');
Route::Post('/post/{post}/comments','CommentController@store')->name('addcomment');
Route::get('merchant/{id}/comments','CommentController@show')->name('showcomment');
Route::get('filter/category/{id}','FilterController@show')->name('categoryfilter'); 
Route::resource('/Mail','MailController');

//login
Route::group(['namespace' => 'Backend'], function () {
    Route::any('/login', 'AdminController@login')->name('login');
});
//for admin
Route::namespace('Backend')->prefix('admin')->as('backend.')->middleware('auth:administrator')->group(function () {
    Route::get('/', 'HomeController@index')->name('admin');
    // Route::get('/', function () {
    //     return view('backend.dashboard');
    // })->name('admin');
    Route::resource('/websiteinformation','WebsiteinformationController');
    Route::resource('/category','CategoryController');
    Route::resource('/mails','MailController');
    Route::resource('/custom-ads','CustomAds\CustomAdsController');
    Route::resource('/custom-adsii','CustomAds\CustomAdsIIController');
    Route::resource('/custom-adsiii','CustomAds\CustomAdsIIIController');
    Route::resource('/merchant','MerchantController');
    Route::resource('/post','PostController');
    Route::resource('/admin', 'AdminController');
    Route::any('logout', 'AdminController@logout')->name('logout');
});



