<?php

use Illuminate\Support\Facades\Route;

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

//一般ユーザー
//ログイン画面表示
Route::get('fresh/general/login', 'App\Http\Controllers\Auth\LoginController@showGeneralLoginForm');
//ログイン認証
Route::post('fresh/general/login', 'App\Http\Controllers\Auth\LoginController@generalLogin');
//マイページ表示
Route::get('fresh/general/mypage', 'App\Http\Controllers\GeneralController@mypage');

//一般ユーザー新規登録
Route::get('signup/add', 'App\Http\Controllers\GeneralController@signupadd');
Route::post('post/create', 'App\Http\Controllers\GeneralController@signupcreate');

//買い物リストトップ画面表示
Route::get('fresh/general/orders', 'App\Http\Controllers\GeneralController@orderstop');
//買い物リスト追加画面表示
Route::get('fresh/general/ordersadd', 'App\Http\Controllers\GeneralController@ordersadd');
//野菜の買い物リスト追加画面
Route::get('fresh/general/vegeadd2', 'App\Http\Controllers\GeneralController@vegeadd2');
//肉の買い物リスト追加画面
Route::get('fresh/general/meatadd2', 'App\Http\Controllers\GeneralController@meatadd2');
//魚の買い物リスト追加画面
Route::get('fresh/general/fishadd2', 'App\Http\Controllers\GeneralController@fishadd2');
//乳製品の買い物リスト追加画面
Route::get('fresh/general/dairyadd2', 'App\Http\Controllers\GeneralController@dairyadd2');
//その他の買い物リスト追加画面
Route::get('fresh/general/otheradd2', 'App\Http\Controllers\GeneralController@otheradd2');
//買い物リスト中の野菜カテゴリの食材を表示
Route::get('fresh/general/vegeview2', 'App\Http\Controllers\GeneralController@vegeview2');
//買い物リスト中の肉カテゴリの食材を表示
Route::get('fresh/general/meatview2', 'App\Http\Controllers\GeneralController@meatview2');
//買い物リスト中の魚カテゴリの食材を表示
Route::get('fresh/general/fishview2', 'App\Http\Controllers\GeneralController@fishview2');
//買い物リスト中の乳製品カテゴリの食材を表示
Route::get('fresh/general/dairyview2', 'App\Http\Controllers\GeneralController@dairyview2');
//買い物リスト中のその他カテゴリの食材を表示
Route::get('fresh/general/otherview2', 'App\Http\Controllers\GeneralController@otherview2');
//買い物リストに追加
Route::post('fresh/general/ordercreate', 'App\Http\Controllers\GeneralController@ordercreate');
//買い物リスト削除画面表示
Route::get('fresh/general/ordersdel', 'App\Http\Controllers\GeneralController@ordersdel');
//買い物リストから削除
Route::post('fresh/general/ordersdel', 'App\Http\Controllers\GeneralController@ordersremove');
//買い物リスト購入チェック画面表示
Route::get('fresh/general/ordersbuy','App\Http\Controllers\GeneralController@ordersbuy');
//買い物リストの購入チェック
Route::post('fresh/general/ordersbuy','App\Http\Controllers\GeneralController@ordersbuycheck');


//冷蔵庫の在庫登録トップ画面表示
Route::get('fresh/general/stockaddtop', 'App\Http\Controllers\GeneralController@stockaddtop');
//野菜の追加画面
Route::get('fresh/general/vegeadd', 'App\Http\Controllers\GeneralController@vegeadd');
//肉の追加画面
Route::get('fresh/general/meatadd', 'App\Http\Controllers\GeneralController@meatadd');
//魚の追加画面
Route::get('fresh/general/fishadd', 'App\Http\Controllers\GeneralController@fishadd');
//乳製品の追加画面
Route::get('fresh/general/dairyadd', 'App\Http\Controllers\GeneralController@dairyadd');
//その他の追加画面
Route::get('fresh/general/otheradd', 'App\Http\Controllers\GeneralController@otheradd');

//冷蔵庫の在庫登録
Route::post('fresh/general/stockcreate', 'App\Http\Controllers\GeneralController@stockcreate');

//冷蔵庫の在庫一覧表示
Route::get('fresh/general/stocktop', 'App\Http\Controllers\GeneralController@stocktop');
//冷蔵庫の野菜の在庫を表示
Route::get('fresh/general/vegeview', 'App\Http\Controllers\GeneralController@vegeview');
//冷蔵庫の肉の在庫を表示
Route::get('fresh/general/meatview', 'App\Http\Controllers\GeneralController@meatview');
//冷蔵庫の魚の在庫を表示
Route::get('fresh/general/fishview', 'App\Http\Controllers\GeneralController@fishview');
//冷蔵庫の乳製品の在庫を表示
Route::get('fresh/general/dairyview', 'App\Http\Controllers\GeneralController@dairyview');
//冷蔵庫のその他の在庫を表示
Route::get('fresh/general/otherview', 'App\Http\Controllers\GeneralController@otherview');
//冷蔵庫の在庫の削除画面表示
Route::get('fresh/general/stockdel', 'App\Http\Controllers\GeneralController@stockdel');
//野菜の在庫の削除画面表示
Route::get('fresh/general/vegedel', 'App\Http\Controllers\GeneralController@vegedel');
//肉の在庫の削除画面表示
Route::get('fresh/general/meatdel', 'App\Http\Controllers\GeneralController@meatdel');
//魚の在庫の削除画面表示
Route::get('fresh/general/fishdel', 'App\Http\Controllers\GeneralController@fishdel');
//乳製品の在庫の削除画面表示
Route::get('fresh/general/dairydel', 'App\Http\Controllers\GeneralController@dairydel');
//その他の在庫の削除画面表示
Route::get('fresh/general/otherdel', 'App\Http\Controllers\GeneralController@otherdel');
//冷蔵庫の在庫から削除
Route::post('fresh/general/stockdel', 'App\Http\Controllers\GeneralController@stockremove');
//冷蔵庫の中身の数量変更画面表示
Route::get('fresh/general/stockedit', 'App\Http\Controllers\GeneralController@stockedit');
//野菜の在庫の数量変更画面表示
Route::get('fresh/general/vegeedit', 'App\Http\Controllers\GeneralController@vegeedit');
//肉の在庫の数量変更画面表示
Route::get('fresh/general/meatedit', 'App\Http\Controllers\GeneralController@meatedit');
//魚の在庫の数量変更画面表示
Route::get('fresh/general/fishedit', 'App\Http\Controllers\GeneralController@fishedit');
//乳製品の在庫の数量変更画面表示
Route::get('fresh/general/dairyedit', 'App\Http\Controllers\GeneralController@dairyedit');
//その他の在庫の数量変更画面表示
Route::get('fresh/general/otheredit', 'App\Http\Controllers\GeneralController@otheredit');
//冷蔵庫の中身の数量変更(更新)
Route::post('fresh/general/stockedit', 'App\Http\Controllers\GeneralController@stockupdate');

//日付の入力画面にアクセス
Route::get('fresh/general/date','App\Http\Controllers\GeneralController@searchdate');
//入力した日付とDBから取得したデータを表示するページ
Route::post('fresh/general/search','App\Http\Controllers\GeneralController@recipesearch');
Route::post('menus','App\Http\Controllers\GeneralController@confirmmenus');
Route::post('save','App\Http\Controllers\GeneralController@menuscreate');
Route::get('end','App\Http\Controllers\GeneralController@end');

Route::get('fresh/general/menu', 'App\Http\Controllers\GeneralController@menufind');
Route::post('fresh/general/menu', 'App\Http\Controllers\GeneralController@menusearch');


//お問い合わせ入力
Route::get('fresh/general/support', 'App\Http\Controllers\GeneralController@supportquestion');
Route::post('fresh/general/support', 'App\Http\Controllers\GeneralController@supportcreate');

//送信完了画面（お問い合わせ）
Route::get('fresh/general/complete', 'App\Http\Controllers\GeneralController@supportcomplete');

//マイページ編集
Route::get('fresh/general/mypageedit', 'App\Http\Controllers\GeneralController@mypageedit');
Route::post('fresh/general/mypageedit', 'App\Http\Controllers\GeneralController@mypageupdate');
//マイページ編集完了
Route::get('jissyu8', 'App\Http\Controllers\Jissyu4_3Controller@index');
Route::post('jissyu8', 'App\Http\Controllers\Jissyu4_3Controller@post');





//企業ユーザー
//ログイン画面表示
Route::get('fresh/company/login', 'App\Http\Controllers\Auth\LoginController@showCompanyLoginForm');
//ログイン認証
Route::post('fresh/company/login', 'App\Http\Controllers\Auth\LoginController@companyLogin');
//マイページ表示
Route::get('fresh/company/mypage', 'App\Http\Controllers\TeamcController@mypage');

//企業ユーザー新規登録
Route::get('new', 'App\Http\Controllers\TeamcController@new');
Route::post('post/create2', 'App\Http\Controllers\TeamcController@create2');

//お知らせ送信履歴を表示する画面
Route::get('fresh/infohistory', 'App\Http\Controllers\TeamcController@infohistory');
Route::post('fresh/infohistory', 'App\Http\Controllers\TeamcController@infohistory');

//お知らせ情報作成画面
Route::get('fresh/company/info', 'App\Http\Controllers\TeamcController@infoadd');
//お知らせ情報確認画面
Route::post('fresh/company/infoconfirm', 'App\Http\Controllers\TeamcController@infoconfirm');
//お知らせフォーム送信完了画面
Route::post('fresh/company/infofinish', 'App\Http\Controllers\TeamcController@infocreate');

//お知らせ送信履歴を表示する画面
Route::get('fresh/company/infohistory', 'App\Http\Controllers\TeamcController@infohistory');
Route::post('fresh/company/infohistory', 'App\Http\Controllers\TeamcController@infohistory');


Route::get('fresh/signup', 'App\Http\Controllers\TeamcController@signup');
Route::post('fresh/signupconfirm', 'App\Http\Controllers\TeamcController@signupconfirm');
Route::post('fresh/signupfinish', 'App\Http\Controllers\TeamcController@signupfinish');

//お問い合わせフォーム表示
Route::get('fresh/company/support', 'App\Http\Controllers\TeamcController@companysupport');
//お問い合わせ内容確認画面表示
Route::post('fresh/company/supportconfirm', 'App\Http\Controllers\TeamcController@companysupportconfirm');
//お問い合わせ完了画面表示
Route::post('fresh/company/supportfinish', 'App\Http\Controllers\TeamcController@companysupportfinish');

Route::get('fresh/resetmail', 'App\Http\Controllers\TeamcController@resetmail');
Route::post('fresh/resetmailconfirm', 'App\Http\Controllers\TeamcController@resetmailconfirm');
Route::post('fresh/resetmailfinish', 'App\Http\Controllers\TeamcController@resetmailfinish');

//売り上げを表示する対象の範囲を選択
Route::get('fresh/company/datachoice', 'App\Http\Controllers\TeamcController@datachoice');
//店舗別売り上げを表示
Route::post('fresh/company/dataview', 'App\Http\Controllers\TeamcController@dataview');

//パスワードリセット
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');



Route::get('hello', 'App\Http\Controllers\HelloController@index');
Route::get('/hello/json', 'App\Http\Controllers\HelloController@json');
Route::get('/hello/json/{id}', 'App\Http\Controllers\HelloController@json');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//全ユーザー
Route::get('jissyu14', 'App\Http\Controllers\Jissyu6_3Controller@index');
Route::post('jissyu14/find', 'App\Http\Controllers\Jissyu6_3Controller@find');

Route::get('jissyu14/show', 'App\Http\Controllers\Jissyu6_3Controller@show');
Route::get('jissyu14/add', 'App\Http\Controllers\Jissyu6_3Controller@add');
Route::post('jissyu14/create','App\Http\Controllers\Jissyu6_3Controller@create');

Route::get('jissyu14/edit', 'App\Http\Controllers\Jissyu6_3Controller@edit');
Route::post('jissyu14/update', 'App\Http\Controllers\Jissyu6_3Controller@update');

Route::get('jissyu14/del', 'App\Http\Controllers\Jissyu6_3Controller@del');
Route::post('jissyu14/remove', 'App\Http\Controllers\Jissyu6_3Controller@remove');



//お問い合わせ一覧(一般ユーザー)
Route::get('support', 'App\Http\Controllers\SupportController@index');
Route::post('support/find', 'App\Http\Controllers\SupportController@find');

Route::get('support/show', 'App\Http\Controllers\SupportController@show');
Route::get('support/add', 'App\Http\Controllers\SupportController@add');
Route::post('support/create','App\Http\Controllers\SupportController@create');

Route::get('support/edit', 'App\Http\Controllers\SupportController@edit');
Route::post('support/update', 'App\Http\Controllers\SupportController@update');

Route::get('support/del', 'App\Http\Controllers\SupportController@del');
Route::post('support/remove', 'App\Http\Controllers\SupportController@remove');


//お問い合わせ一覧(企業ユーザー)
Route::get('companysupport', 'App\Http\Controllers\CompanysupportController@index');
Route::post('companysupport/find', 'App\Http\Controllers\CompanysupportController@find');

Route::get('companysupport/show', 'App\Http\Controllers\CompanysupportController@show');
Route::get('companysupport/add', 'App\Http\Controllers\CompanysupportController@add');
Route::post('companysupport/create','App\Http\Controllers\CompanysupportController@create');

Route::get('companysupport/edit', 'App\Http\Controllers\CompanysupportController@edit');
Route::post('companysupport/update', 'App\Http\Controllers\CompanysupportController@update');

Route::get('companysupport/del', 'App\Http\Controllers\CompanysupportController@del');
Route::post('companysupport/remove', 'App\Http\Controllers\CompanysupportController@remove');



//管理(ManagementController)
//ログイン画面表示
Route::get('fresh/management/login', 'App\Http\Controllers\Auth\LoginController@showManagementLoginForm');
//ログイン認証
Route::post('fresh/management/login', 'App\Http\Controllers\Auth\LoginController@managementLogin');
//マイページ表示
Route::get('fresh/management/mypage', 'App\Http\Controllers\ManagementController@top');
//ログイン画面
Route::get('hello2/auth', 'App\Http\Controllers\ManagementController@getAuth');
Route::post('hello2/auth', 'App\Http\Controllers\ManagementController@postAuth');

//トップ画面
Route::get('hello2/top', 'App\Http\Controllers\ManagementController@top');
Route::post('hello2/top', 'App\Http\Controllers\ManagementController@post');


//一般ユーザー一覧
Route::get('generaluser2', 'App\Http\Controllers\ManagementController@generaluserindex');
Route::post('generaluser2/find', 'App\Http\Controllers\ManagementController@generaluserfind');

Route::get('generaluser2/show', 'App\Http\Controllers\ManagementController@generalusershow');
Route::get('generaluser2/add', 'App\Http\Controllers\ManagementController@generaluseradd');
Route::post('generaluser2/create','App\Http\Controllers\ManagementController@generalusercreate');

Route::get('generaluser2/edit', 'App\Http\Controllers\ManagementController@generaluseredit');
Route::post('generaluser2/update', 'App\Http\Controllers\ManagementController@generaluserupdate');

Route::get('generaluser2/del', 'App\Http\Controllers\ManagementController@generaluserdel');
Route::post('generaluser2/remove', 'App\Http\Controllers\ManagementController@generaluserremove');


//企業ユーザー一覧
Route::get('company2', 'App\Http\Controllers\ManagementController@companyindex');
Route::post('company2/find', 'App\Http\Controllers\ManagementController@companyfind');

Route::get('company2/show', 'App\Http\Controllers\ManagementController@companyshow');
Route::get('company2/add', 'App\Http\Controllers\ManagementController@companyadd');
Route::post('company2/create','App\Http\Controllers\ManagementController@companycreate');

Route::get('company2/edit', 'App\Http\Controllers\ManagementController@companyedit');
Route::post('company2/update', 'App\Http\Controllers\ManagementController@companyupdate');

Route::get('company2/del', 'App\Http\Controllers\ManagementController@companydel');
Route::post('company2/remove', 'App\Http\Controllers\ManagementController@companyremove');

//お問い合わせ一覧(企業ユーザー)
Route::get('companysupport2', 'App\Http\Controllers\ManagementController@companysupportindex');
Route::post('companysupport2/find', 'App\Http\Controllers\ManagementController@companysupportfind');

Route::get('companysupport2/show', 'App\Http\Controllers\ManagementController@companysupportshow');
Route::get('companysupport2/add', 'App\Http\Controllers\ManagementController@companysupportadd');
Route::post('companysupport2/create','App\Http\Controllers\ManagementController@companysupportcreate');

Route::get('companysupport2/edit', 'App\Http\Controllers\ManagementController@companysupportedit');
Route::post('companysupport2/update', 'App\Http\Controllers\ManagementController@companysupportupdate');

Route::get('companysupport2/del', 'App\Http\Controllers\ManagementController@companysupportdel');
Route::post('companysupport2/remove', 'App\Http\Controllers\ManagementController@companysupportremove');

//お問い合わせ一覧(一般ユーザー)
Route::get('support2', 'App\Http\Controllers\ManagementController@supportindex');
Route::post('support2/find', 'App\Http\Controllers\ManagementController@supportfind');

Route::get('support2/show', 'App\Http\Controllers\ManagementController@supportshow');
Route::get('support2/add', 'App\Http\Controllers\ManagementController@supportadd');
Route::post('support2/create','App\Http\Controllers\ManagementController@supportcreate');

Route::get('support2/edit', 'App\Http\Controllers\ManagementController@supportedit');
Route::post('support2/update', 'App\Http\Controllers\ManagementController@supportupdate');

Route::get('support2/del', 'App\Http\Controllers\ManagementController@supportdel');
Route::post('support2/remove', 'App\Http\Controllers\ManagementController@supportremove');




