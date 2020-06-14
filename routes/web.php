<?php
/*
==============================================
			Frontend Route
==============================================
*/

Route::get('/','HomeController@index');
Route::get('/ProductByCategory/{id}','HomeController@productByCategory');
Route::get('/view-product/{product_id}','HomeController@productById');

/*Route::get('/user-login','HomeController@frontUserLogin');
Route::post('/user-registration','HomeController@userRegistration');
Route::post('/sign-in','HomeController@userSignIn');
Route::get('/user-post','HomeController@userPost');*/


/*
==============================================
			Backend Route
==============================================
*/
Route::get('/logout','SuperAdminController@logout');
Route::get('/backend','AdminController@index');
Route::get('/dashboard','SuperAdminController@index');
Route::post('/admin-login-check','AdminController@adminLoginCheck');

/*
==============================================
			Category Route
==============================================
*/
Route::get('/add-category','CategoryController@index');
Route::get('/all-category','CategoryController@allCategory');
Route::post('/save-category','CategoryController@saveCategory');
Route::get('/unactive-cat/{id}','CategoryController@unActiveCategory');
Route::get('/active-cat/{id}','CategoryController@activeCategory');
Route::get('/edit/{id}','CategoryController@editCategory');
Route::get('/delete/{id}','CategoryController@deleteCategory');
Route::post('/update-category','CategoryController@updateCategory');

/*
==============================================
			Brand Route
==============================================
*/
Route::get('/add-manufacture','BrandController@index');
Route::get('/all-manufacture','BrandController@allManufacture');
Route::post('/save-manufacture','BrandController@saveManufacture');
Route::get('/unactive/{id}','BrandController@unActiveBrand');
Route::get('/active/{id}','BrandController@activeBrand');
Route::get('/edit/{id}','BrandController@editBrand');
Route::get('/delete/{id}','BrandController@deleteBrand');
Route::post('/update-brand','BrandController@updateBrand');

/*
====================================================
			Product Route
====================================================
*/
Route::get('/add-product','ProductController@index');
Route::post('/save-product','ProductController@saveProduct');
Route::get('/all-product','ProductController@allProduct');
Route::get('/unactive-pro/{product_id}','ProductController@unActiveProduct');
Route::get('/active-pro/{product_id}','ProductController@activeProduct');
Route::get('/edit-product/{product_id}','ProductController@editProduct');
Route::get('/delete-product/{product_id}','ProductController@deleteProduct');
Route::post('/update-product','ProductController@updateProduct');
/*
====================================================
			Cart Route
====================================================
*/
Route::post('/add-to-cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@showCart');
Route::get('/delete-cart-row/{rowId}','CartController@deleteCart');
Route::post('/update-cart','CartController@updateCart');

/*
==============================================
			Checkout Route
==============================================
*/
Route::get('/user-login','CheckoutController@LoginCheck');
Route::get('/checkout','CheckoutController@index');
Route::post('/customer-registration','CheckoutController@customer_registration');
Route::post('/customer-login','CheckoutController@customer_login');
Route::post('/save-shipping','CheckoutController@saveShipping');
Route::get('/customer_logout','CheckoutController@customerLogout');

/*
==============================================
			Payment Route
==============================================
*/
Route::get('/payment','CheckoutController@Payment');

