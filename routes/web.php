<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//================user
//=================Login

Route::get('/','UsersController@getHome');
Route::get('/news','UsersController@getNews');
Route::get('/news-category/{id}','UsersController@getNewsCategory');
route::get('/sport','UsersController@getSport');
route::get('/sport-category/{id}','UsersController@getSportCategory');
route::get('/game','UsersController@getGame');
route::get('/category-page/{id}','UsersController@getCategoryPage');
route::get('/game-category-inner-page/{id}','UsersController@gameCategoryInnerPage');
route::get('/interesting','UsersController@getInteres');
route::get('/interesting-category/{id}','UsersController@getInteresCategory');
route::post('/subscripe','UsersController@postSubscripe');
route::get('show-more-interest/{id}','UsersController@getShowMoreInterest');
route::get('show-more-news/{id}','UsersController@getShowMoreNews');


Route::post('user/registration','UsersController@postRegistration');
Route::get('user/registration','UsersController@getRegistration');
Route::post('user/login-modal','UsersController@postLoginModal');
Route::post('user/login','UsersController@postLogin');
Route::get('user/logout','UsersController@getLogOut');
Route::get('user/login','UsersController@getLogin');
Route::get('user/profile','UsersController@getUserProfile');
Route::post('change-user-profile','UsersController@postChangeUserProfile');
Route::post('change-passowrd','UsersController@postChangePassowrd');
Route::post('user/change-user-avatar','UsersController@postChangeUserAvatar');
Route::post('user/comment','UsersController@postComment');


Route::get('user/facebook-login','UsersController@getFacebookLogin');
Route::get('user/facebook-callback','UsersController@getFacebookCallback');

Route::get('user/twitter-login','UsersController@getTwitterLogin');
Route::get('user/twitter-callback','UsersController@getTwitterCallback');

Route::get('user/google-login','UsersController@getGoogleLogin');
Route::get('user/google-callback','UsersController@getGoogleCallback');
Route::get('user/search','UsersController@getSearch');
Route::post('user/rating','UsersController@postRating');


//
//Route::get('video','UsersController@getVideo');
//=================End

//================ end user


Route::get('paypal','PaymentController@getPayPal');
Route::get('paypal/response','PaymentController@getPaypalReturnResponse');
Route::get('paypal/response/cancel','PaymentController@getPaypalCancelResponse');





//================Admin

//===========Gallery
Route::get('ab-admin/page-gallery/{page_id}/{category_id}','AdminController@getPageGallery');
Route::post('ab-admin/page-gallery/{page_id}/{category_id}','AdminController@postAddPageGallery');
Route::get('ab-admin/news-gallery-crop/{img_id}/{page_id}/{category_id}','AdminController@getGalleryCropImage');
Route::post('ab-admin/crop-page-gallery','AdminController@postCropPageGallery');
Route::post('ab-admin/crop-image-page-gallery-update','AdminController@postCropImagePageGalleryUpdate');
Route::get('ab-admin/delete-page-gallery/{id}','AdminController@getDeletePageGallery');
Route::post('ab-admin/edit-page-gallery','AdminController@postEditPageGallery');
Route::post('ab-admin/page-resize-images','AdminController@postPageResizeImages');
Route::post('ab-admin/add-page-youtbe-video','AdminController@postAddPageYoutbeVideo');
Route::get('ab-admin/delete-page-youtbe-video/{id}','AdminController@getDeletePageYoutbeVideo');
//============End Gallery

Route::get('ab-admin','AdminController@getLogin');
Route::post('ab-admin/login','AdminController@postLogin');
Route::get('ab-admin/dashboard','AdminController@getDashboard');
Route::get('ab-admin/login-out','AdminController@getLogout');


//================Article
Route::get('ab-admin/article','AdminController@getAddArticle');
Route::get('ab-admin/article-list','AdminController@getArticleList');
Route::post('ab-admin/article-add','AdminController@postAddArticle');
Route::post('ab-admin/article-uploade','AdminController@postUploadeArticleAjax');
Route::get('ab-admin/article-delete/{id}','AdminController@getDeleteArticle');
Route::get('ab-admin/article-edit/{id}','AdminController@getEditArticle'); 
Route::post('ab-admin/article-update/','AdminController@postUpdateArticle'); 
Route::post('ab-admin/add-youtube/','AdminController@postAddYoutbeVideo'); 

//================End Article

Route::get('ab-admin/youtube','AdminController@getYoutube'); 
Route::get('ab-admin/youtube/{id}','AdminController@getDeleteYoutube'); 
Route::get('ab-admin/youtube-edit/{id}','AdminController@getEditYoutubeVideo');
Route::post('ab-admin/youtube-autoplay','AdminController@postAutoplay'); 

Route::get('ab-admin/gallery-list','AdminController@getGallery'); 
Route::get('ab-admin/add-gallery','AdminController@getAddGallery'); 
Route::post('ab-admin/add-gallery','AdminController@postAddGallery'); 
Route::get('ab-admin/delete-gallery/{id}','AdminController@getDeleteGallery'); 
Route::post('ab-admin/gallery-image-edit','AdminController@posteditGalleryImages'); 
Route::get('ab-admin/crop-image/{id}','AdminController@getCropImage'); 
Route::post('ab-admin/crop-image','AdminController@postCropImages'); 
Route::post('ab-admin/crop-image-update','AdminController@postUpdeCropImage'); 
Route::post('ab-admin/resize-image','AdminController@postResizeimage'); 

//Pages
Route::get('ab-admin/sport','AdminController@getSport');
Route::get('ab-admin/games','AdminController@getGames');
Route::get('ab-admin/video','AdminController@getVideo');
Route::get('ab-admin/show-biznes','AdminController@getShowBiznes');
Route::get('ab-admin/culture','AdminController@getCulture');

Route::get('ab-admin/news-list','AdminController@getNewsList');
Route::get('ab-admin/add-news','AdminController@getAddNews');
Route::post('ab-admin/add-news','AdminController@postAddNews');
Route::get('ab-admin/del-news/{id}','AdminController@getDeleteNews');
Route::get('ab-admin/one-news/{id}','AdminController@getOneNews');
Route::post('ab-admin/edit-news','AdminController@postEditNews');


Route::get('ab-admin/sport-list','AdminController@getSportList');
Route::get('ab-admin/add-sport','AdminController@getAddSport');
Route::post('ab-admin/add-sport','AdminController@postAddSport');
Route::get('ab-admin/del-sport/{id}','AdminController@getDeleteSport');
Route::get('ab-admin/one-sport/{id}','AdminController@getOneSport');
Route::post('ab-admin/edit-sport','AdminController@postEditSport');

Route::get('ab-admin/interes-list','AdminController@getInteresList');
Route::get('ab-admin/add-interes','AdminController@getAddInteres');
Route::post('ab-admin/add-interes','AdminController@postAddInteres');
Route::get('ab-admin/del-interes/{id}','AdminController@getDeleteInteres');
Route::get('ab-admin/one-interes/{id}','AdminController@getOneInteres');
Route::post('ab-admin/edit-sport','AdminController@postEditInterests');

Route::post('ab-admin/add-game-name','AdminController@postAddGameName');
Route::get('ab-admin/game-page-list','AdminController@gamePageList');
Route::get('ab-admin/delete-game-name/{id}','AdminController@getDeleteGameName');
Route::get('ab-admin/add-game-cagegoty/{id}','AdminController@getAddGameCagegoty');
Route::post('ab-admin/add-game-category/','AdminController@postAddGameCategory');
Route::get('ab-admin/delete-game-category/{id}','AdminController@getDeleteGameCategory');


//end Pages

Route::get('ab-admin/language','AdminController@getLanguage');
Route::post('ab-admin/add-language','AdminController@postAddLanguage');
Route::get('ab-admin/language-list','AdminController@getLanguageList');
Route::get('ab-admin/language-delete/{id}','AdminController@getDeleteLanguage');



Route::get('ab-admin/subscripe','AdminController@getSubscripe');
Route::get('ab-admin/subscripe-delete/{id}','AdminController@getDeleteSubscripe');
Route::get('ab-admin/subscripe-inner/{status}/{id}','AdminController@getOneSubscripe');



Route::get('ab-admin/all-users','AdminController@getAllUsers');
Route::get('ab-admin/user-delete/{id}','AdminController@getDeleteUser');
Route::get('ab-admin/facebook-users','AdminController@getFacebookUsers');
Route::get('ab-admin/google-users','AdminController@getGoogleUsers');
Route::get('ab-admin/tweeter-users','AdminController@getTweeterUsers');



