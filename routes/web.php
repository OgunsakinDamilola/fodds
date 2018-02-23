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

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/activation/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/apply/{id}/financial-aid','FinancialAidController@apply');


Route::get('/apply/financial-aid/financial-questionnaire/{financialAidID}/{financialAidType}', 'FinancialAidController@questionnaire');

Route::post('/save/kyc/information','FinancialAidController@saveKycInformation');
//Route::post('/save/questionnaire',function(\Illuminate\Http\Request $r){
//    dd($r);
//});


Route::get('/titles','HelpersController@titles');
Route::get('/designations','HelpersController@designations');
Route::get('/banks','HelpersController@banks');
Route::get('/collateral','HelpersController@collateral');
Route::get('/identities','HelpersController@identities');
Route::post('/saveDocuments','HelpersController@saveDocuments')->name('dropzone.fileupload');

