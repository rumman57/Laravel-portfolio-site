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


    
        /*********------------Front-------------------**********
        **----------***------------View------------***--------*/

   /*********Get All Pages  Start ****************/
Route::get('/',[
    'uses'=>'PagesController@getIndex',
    'as'  => 'home.index'
]);
Route::get('/resume',[
    'uses'=>'PagesController@getResume',
    'as'  => 'pages.resume'
]);
Route::get('/portfolio',[
    'uses'=>'PagesController@getPortfolio',
    'as'  => 'pages.portfolio'
]);
Route::get('/blog',[
    'uses'=>'PagesController@getBlog',
    'as'  => 'pages.blog'
]);
Route::get('/contact',[
  'uses'=>'pagesController@getContact',
  'as'=>'pages.contact'
]);
Route::post('/contact',[
  'uses'=>'pagesController@postContact',
  'as'=>'pages.contact'
]);
   /*********Get All Pages  End ****************/

    /**Get Single Page Start**/
Route::get('/blog/{id}',['uses'=>'blogController@getSinglepost', 'as'=>'blog.single']);
  /**Get Single Page End**/

  /**Category**/
Route::get('/category/{name}',['uses'=>'blogController@getCategoryPage', 'as'=>'blog.category']);
  /**Category**/

/**Search**/
Route::post('/search',['uses'=>'blogController@postSearchData', 'as'=>'blog.search']);
Route::post('/search/category/{name}',['uses'=>'blogController@postSearchByCategory', 'as'=>'blog.searchcategory']);
  /**Search**/











/*********------------ADMIN-------------------**********
        **----------***------------PANEL------------***--------*/


Route::group(['middleware'=>'auth'],function(){

Route::get('/myadmin',[
	'uses'=>'AdminController@getIndex',
	'as'  => 'admin.index'
]);
Route::get('/logout',[
	'uses'=>'AdminController@getLogOut',
	'as'  => 'admin.logout'
]);

 /*********  Service Controller Start  ********/
 Route::resource('/services','ServiceController');
 /********** Service Controller End *****/

 /*********  ServiceList Controller Start  ********/
 Route::resource('/service-list','ServiceListController');
 /********** ServiceList Controller End *****/

 /*********  Portfolio Service Controller Start  ********/
 Route::resource('/portfolo-services','PortfolioServiceController');
 /********** Portfolio Service Controller End *****/

 /*********  Portfolio Service List Controller Start  ********/
 Route::resource('/portfolo-service-list','PortServiceListController');
 /********** Portfolio Service List Controller End *****/

  /**Blog Post Start**/
Route::resource('posts','PostController');
      /**Blog Post End**/

      /**Category Start**/
Route::resource('categories','CategoryController');
      /**Category End**/

      /**Category Start**/
Route::resource('tags','TagController');
      /**Category End**/

  /*********  Index Page OptionController Start  ********/
 Route::get('/index-options',[
	'uses'=>'OptionController@getIndexOption',
	'as'  => 'index.options'
]);
  Route::post('/index-options',[
	'uses'=>'OptionController@postIndexOption',
	'as'  => 'index.options'
]);
 /********** Index Page OptionController Start *****/

 /*********  Resume Page OptionController Start  ********/
 Route::get('/resume-option',[
	'uses'=>'OptionController@getResumeOption',
	'as'  => 'pages.resumeoption'
]);
  Route::post('/resume-option',[
	'uses'=>'OptionController@postResumeOption',
	'as'  => 'pages.resumeoption'
]);
 /********** Resume Page OptionController Start *****/

/**For Contact Page Start**/
Route::get('/admin-contact',['uses'=>'AdminContactController@getContact', 'as'=>'admin.contact']);
Route::get('/admin-contact/{id}',['uses'=>'AdminContactController@getReadContactMessage', 'as'=>'admin.readmsg']);
Route::get('mailbox/composer',['uses'=>'AdminContactController@getComposerPage', 'as'=>'contact.composer']);
Route::get('mailbox/reply/{id}',['uses'=>'AdminContactController@getReplyPage', 'as'=>'contact.reply']);
Route::post('sendcomposemsg',['uses'=>'AdminContactController@postSendComposeMsg', 'as'=>'send.comopose']);
Route::delete('contacts-delete/{id}',['uses'=>'AdminContactController@Delete', 'as'=>'adcontact.delete']);
   /**For Contact Page End**/

/**For Social Site Link Start**/
Route::resource('social-site','SocialSiteController');
   /**For Social Site Link End**/


/*********  Site Option OptionController Start  ********/
 Route::get('/site-option',[
  'uses'=>'OptionController@getSiteOption',
  'as'  => 'site.options'
]);
  Route::post('/site-option',[
  'uses'=>'OptionController@postSiteOption',
  'as'  => 'site.options'
]);
 /********** Site Option OptionController Start *****/

 /*******Admin Profile******/
Route::get('/admin-profile',[
  'uses'=>'AdminController@getAdminProfile',
  'as'  => 'admin.profile'
]);
Route::post('/admin-profile',[
  'uses'=>'AdminController@postChangeAdminEmail',
  'as'  => 'changeadmin.email'
]);
Route::post('/admin-profile-change-password',[
  'uses'=>'AdminController@postChangePassword',
  'as'  => 'changeadmin.password'
]);

 /*******Admin Profile**********/
   
  /*******Image Controller Start**********/
Route::get('/get-image',[
  'uses'=>'ImageController@getImagepage',
  'as'  => 'get.image'
]);
Route::post('/get-image',[
  'uses'=>'ImageController@postStoreImage',
  'as'  => 'get.image'
]);
Route::get('/showimages',[
  'uses'=>'ImageController@getShowImage',
  'as'  => 'show.image'
]);
Route::delete('deleteimage/{id}',['uses'=>'ImageController@DeleteImage', 'as'=>'image.delete']);
  /*******Image Controller End**********/



});






/***Login & Register Start*****/ 
Route::group(['middleware'=>'guest'],function(){

Route::get('/login',[
	'uses'=>'AdminController@getLogin',
	'as'  => 'admin.login'
]);
Route::post('/login',[
	'uses'=>'AdminController@postLogin',
	'as'  => 'admin.login'
]);
//Reset Password Routes

Route::get('password/reset',['as'=>'password.reset','uses'=>'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/email',['as'=>'password.email','uses'=>'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset/{token?}',['as'=>'password.resetform','uses'=>'Auth\ResetPasswordController@showResetForm']);
Route::post('password/reset',['as'=>'password.nowreset','uses'=>'Auth\ResetPasswordController@reset']);

});

/***Login & Register End*****/ 