<?php
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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('register_test');
});
 
Route::get('/', 'WelcomeController@index');
 
  
 
Route::get('login/{provider}', 'SocialController@redirect');
Route::get('login/{provider}/callback', 'SocialController@Callback');

Route::get('login/twitter', 'SocialController@twitterRedirect');
Route::get('login/twitter/callback', 'SocialController@TwitterCallback');
   
   
Auth::routes();

// socialite

// socialite


// Auth::routes(['verify' => true]);
// Route::get('/home', 'HomeController@index')->name('home');

 
 


// Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

// ==================== CUSTOM PAGES ============================= //
    Route::get('/about', 'Pages\PagesController@about')->name('about');
    Route::get('/contact', 'Pages\PagesController@contact')->name('contact');
    Route::get('/services', 'Pages\PagesController@services')->name('services');
    Route::get('/careers', 'Pages\PagesController@careers')->name('careers');
    Route::get('/help', 'Pages\PagesController@help')->name('help');
    Route::get('/faq', 'Pages\PagesController@faq')->name('faq');
    Route::get('/terms_conditions', 'Pages\PagesController@terms_conditions')->name('terms_conditions');
    Route::get('/privacy_policy', 'Pages\PagesController@privacy_policy')->name('privacy_policy');
    Route::get('/sitemap', 'Pages\PagesControCustomerControllerller@sitemap')->name('sitemap');

    Route::post('/updatecustomer/{id}', '@updatecustomer');

    Route::get('/df', 'CustomerController@otpview')->name('otp');


    Route::get('/getotp', 'CustomerController@getotp');
    Route::post('/otp/verify/{id}', 'CustomerController@otpverify');

 
    Route::get('/vendor/login', 'Auth\LoginController@vendorlogin')->name('vendor_login');

    Route::get('/catagorylist/single_service/{id}','ProductController@single_service');

   // search dashboard
    Route::post('/customer/search', 'WelcomeController@search');
    // search dashboard
    Route::get('/user/newsfeed','UserController@index');
    Route::get('/user/edit_profile','UserController@edit_profile');
    Route::get('/user/register-after-modal','UserController@registeraftermodal');
    Route::post('/user/choosen_topic_store','UserController@choosen_topic_store');
    Route::post('/user/update_profile','UserController@update_profile');
    Route::get('/user/blog_post','UserController@blog_post');
    Route::post('/user/update_blog','UserController@update_blog');

    Route::post('/user/comments','UserController@comments');







    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('posts', 'HomeController@posts')->name('posts');
    Route::post('like', 'HomeController@LikePost')->name('like');

    Route::post('dislike', 'HomeController@DisLikePost')->name('dislike');

    // follow unfollow
    Route::get('users', 'HomeController@users')->name('users');
    Route::get('user/{id}', 'HomeController@user')->name('user.view');
    Route::post('ajaxRequest', 'HomeController@ajaxRequest')->name('ajaxRequest');
    // follow unfollow

 
   

    // ajax related
   Route::post('/get/catagory', 'AjaxController@getcatagoryBydepartment');
   Route::post('/get/subcatagory', 'AjaxController@getsubcatagoryBycatagory');
   Route::post('/ajax/getBlogComments','AjaxController@getBlogComments');
 

    
 
##  ##
### ##
##  ##
// ==================== ADMIN SECTION ============================= //
    Route::group(['as' => 'admin.', 'middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@dashboard');

    // Route::get('categories/{category}/remove', 'CategoryController@remove')->name('categories.remove');
    // Route::get('categories/trash', 'CategoryController@trash')->name('categories.trash');
    // Route::get('categories/recover/{id}', 'CategoryController@recoverCat')->name('categories.recover');

    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

    Route::post('vendor/dashboard', 'AdminController@vendordashboard');

  

    Route::resource('profiles', 'ProfileController');
    Route::get('/profiles/destroy/{id}','ProfileController@destroy');


  




    // pincode
    Route::resource('pins', 'PinController');
    Route::post('/pins/create', 'PinController@create');
    Route::get('/pins/edit/{id}', 'PinController@edit');
    Route::post('/pins/update/{id}', 'PinController@update');
    Route::post('/pins/update/{id}', 'PinController@update');
    Route::get('/pins/destroy/{id}','PinController@destroy');
    // pincode


 
    // branches
    Route::resource('branches', 'BranchController');
    Route::post('/branches/store', 'BranchController@store');
    Route::get('/branches/edit/{id}', 'BranchController@edit');
    Route::post('/branches/update/{id}', 'BranchController@update');
    Route::get('/branches/destroy/{id}','BranchController@destroy');
    // branches
 

      // departments
    Route::resource('departments', 'DepartmentController');
    Route::post('/departments/store', 'DepartmentController@store');
    Route::get('/departments/edit/{id}', 'DepartmentController@edit');
    Route::post('/departments/update/{id}', 'DepartmentController@update');
    Route::get('/departments/destroy/{id}','DepartmentController@destroy');
    // departments


      // categories
    Route::resource('categories', 'CategoryController');
    Route::post('/categories/store', 'CategoryController@store');
    Route::get('/categories/edit/{id}', 'CategoryController@edit');
    Route::post('/categories/update/{id}', 'CategoryController@update');
    Route::get('/categories/destroy/{id}','CategoryController@destroy');
    // categories

     // Sub-categories
    Route::resource('subcategories', 'SubcatagoryController');
    Route::post('/subcategories/store', 'SubcatagoryController@store');
    Route::get('/subcategories/edit/{id}', 'SubcatagoryController@edit');
    Route::post('/subcategories/update/{id}', 'SubcatagoryController@update');
    Route::get('/subcategories/destroy/{id}','SubcatagoryController@destroy');
    // Sub-categories


        // Service Type
    Route::resource('servicetype', 'ServiceTypeController');
    Route::post('/servicetype/store', 'ServiceTypeController@store');
    // Route::get('/servicetype/edit/{id}', 'ServiceTypeController@edit');
    // Route::post('/servicetype/update/{id}', 'ServiceTypeController@update');
    // Route::get('/servicetype/destroy/{id}','ServiceTypeController@destroy');
    // Service Type
 

     // catagory list
    Route::resource('catagorylist', 'CatagoryListController');
    Route::post('/catagorylist/store', 'CatagoryListController@store');
    Route::get('/catagorylist/edit/{id}', 'CatagoryListController@edit');
    Route::post('/catagorylist/update/{id}', 'CatagoryListController@update');
    Route::get('/catagorylist/destroy/{id}','CatagoryListController@destroy');
    // catagory list


      // services
    Route::resource('services', 'ProductController');
    Route::post('/services/store', 'ProductController@store');
    // Route::get('/catagorylist/edit/{id}', 'CatagoryListController@edit');
    // Route::post('/catagorylist/update/{id}', 'CatagoryListController@update');
    Route::get('/services/destroy/{id}','ProductController@destroy');


    // services


       //managers
    Route::resource('managers', 'ManagerController');
    Route::post('/managers/store', 'ManagerController@store');
    Route::get('/managers/edit/{id}', 'ManagerController@edit');
    Route::post('/managers/update/{id}', 'ManagerController@update');
    Route::get('/managers/destroy/{id}','ManagerController@destroy');
    //managers



         //vendor
    Route::resource('vendors', 'VendorController');
    Route::post('/vendors/store', 'VendorController@store');
    Route::get('/vendors/edit/{id}', 'VendorController@edit');
    Route::post('/vendors/update/{id}', 'VendorController@update');
    Route::get('/vendors/destroy/{id}','VendorController@destroy');

    //vendor


   
    






});
