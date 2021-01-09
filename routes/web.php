<?php

Route::get('/', 'FrontEnd\FrontendController@index');
Auth::routes();
Route::resource('frontend', 'FrontEnd\FrontendController');
Route::get('cloth','FrontEnd\FrontendController@cloth')->name('frontend.cloth');
Route::get('men-cloth', 'FrontEnd\MenController@men_cloth')->name('frontend.men.cloth');
Route::get('men-search', 'FrontEnd\MenController@men_search')->name('men.search');
Route::get('men-price-search', 'FrontEnd\MenController@men_price_search')->name('men.price.search');

Route::get('women-cloth', 'FrontEnd\WomenController@women_cloth')->name('frontend.women.cloth');
Route::get('women-search', 'FrontEnd\WomenController@women_search')->name('women.search');
Route::get('women-price-search', 'FrontEnd\WomenController@women_price_search')->name('women.price.search');

Route::get('kids-cloth', 'FrontEnd\KidsController@kids_cloth')->name('frontend.kids.cloth');
Route::get('kids-search', 'FrontEnd\KidsController@kids_search')->name('kids.search');
Route::get('kids-price-search', 'FrontEnd\KidsController@kids_price_search')->name('kids.price.search');

Route::get('groceries', 'FrontEnd\GroceriesController@groceries')->name('frontend.groceries');
Route::get('groceries-search', 'FrontEnd\GroceriesController@groceries_search')->name('groceries.search');
Route::get('groceries-price-search', 'FrontEnd\GroceriesController@groceries_price_search')->name('groceries.price.search');

Route::get('accessories', 'FrontEnd\AccessoriesController@accessories')->name('frontend.accessories');
Route::get('accessories-search', 'FrontEnd\AccessoriesController@accessories_search')->name('accessories.search');
Route::get('accessories-price-search', 'FrontEnd\AccessoriesController@accessories_price_search')->name('accessories.price.search');

Route::get('offer-zone', 'FrontEnd\OfferzoneController@offer_zone')->name('frontend.offer_zone');
Route::get('/wishlist/{pid}', 'FrontEnd\WishlistController@wishlist');
Route::get('/remove/{wid}', 'FrontEnd\WishlistController@remove');

Route::resource('subscriber', 'BackEnd\SubscriberController');
Route::resource('review', 'BackEnd\ReviewController');

//goto backend set /login in url
Route::get('/home', array('before' => 'auth', 'uses' => 'HomeController@index'));
Route::group(['middleware' => ['preventbackbutton','auth']],function() {
    Route::get('/home','HomeController@index');
    Route::resource('/user','BackEnd\UserController');
    Route::get('user-index','BackEnd\UserController@index')->name('user.index');
    Route::get('user-create','BackEnd\UserController@create')->name('user.create');
    Route::resource('category', 'BackEnd\CategoryController');
    Route::get('category-index', 'BackEnd\CategoryController@index')->name('category.index');
    Route::get('category-create', 'BackEnd\CategoryController@create')->name('category.create');
    Route::get('category-edit-{id}', 'BackEnd\CategoryController@edit')->name('category.edit');
    Route::get('category-search', 'BackEnd\CategoryController@search')->name('category.search');
    Route::resource('product', 'BackEnd\ProductController');
    Route::get('product-index', 'BackEnd\ProductController@index')->name('product.index');
    Route::get('product-create', 'BackEnd\ProductController@create')->name('product.create');
    Route::get('/category_name/{cname}', 'BackEnd\ProductController@sub_category');
    Route::get('product-edit-{id}', 'BackEnd\ProductController@edit')->name('product.edit');
    Route::get('product-search', 'BackEnd\ProductController@search')->name('product.search');

    Route::get('review-index', 'BackEnd\ReviewController@index')->name('review.index');
    Route::get('review-create', 'BackEnd\ReviewController@create')->name('review.create');
    Route::resource('offer', 'BackEnd\OfferController');
    Route::get('offer-index', 'BackEnd\OfferController@index')->name('offer.index');
    Route::get('offer-create', 'BackEnd\OfferController@create')->name('offer.create');
    Route::get('offer-display/{id}', 'BackEnd\OfferController@display')->name('offer.display');
    Route::resource('hotdeal', 'BackEnd\HotdealController');
    Route::get('hotdeal-index', 'BackEnd\HotdealController@index')->name('hotdeal.index');
    Route::get('hotdeal-create', 'BackEnd\HotdealController@create')->name('hotdeal.create');
    Route::resource('navoffer', 'BackEnd\NavofferController');
    Route::get('nav-index', 'BackEnd\NavofferController@index')->name('navoffer.index');
    Route::get('nav-create', 'BackEnd\NavofferController@create')->name('navoffer.create');
    Route::get('wishlist-index', 'BackEnd\NavofferController@wishlist_index')->name('wishlist.index');

});




