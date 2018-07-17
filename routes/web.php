<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('admin', function () {
    return view('admin.layout.index');
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'contact'], function(){
		Route::get('list-contact','Admin\ContactController@getListContact');
		//Route::post('add','Admin\FooterController@postAddFooter');
		//Route::get('edit/{id}','Admin\FooterController@getEditFooter');
		//Route::post('edit/{id}','Admin\FooterController@postEditFooter');
		//Route::get('edit/{id}','Admin\CategoryController@getEditCategory');
		//Route::post('edit/{id}', 'Admin\CategoryController@postEditCategory');
		//Route::get('delete/{id}','Admin\CategoryController@getDeleteCategory');
	});
});
// Footer //
Route::get('about-us','Guest\FooterController@getAboutUs');
Route::get('contact','Guest\FooterController@getAddContact');
Route::post('contact','Guest\FooterController@postAddContact');
Route::post('offline','Guest\FooterController@postAddContactOffline');
Route::get('term-of-services','Guest\FooterController@getTermOfServices');
Route::get('privacy-policy','Guest\FooterController@getPrivacyPolicy');
Route::get('operation-regulation','Guest\FooterController@getOperationRegulation');
Route::get('resolve-complaints','Guest\FooterController@getResolveComplaints');
