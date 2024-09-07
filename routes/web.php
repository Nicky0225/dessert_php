<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthUserAdminMiddleware;

use Laravel\Socialite\Facades\Socialite;

// use Socialite;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/google/auth', function () {
    return Socialite::driver('google')->redirect();
});




Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {

        Route::get('home', 'App\Http\Controllers\UserAuthController@home')->name('user.auth.home');
        
       
        Route::get('login', 'App\Http\Controllers\UserAuthController@Login')->name('user.auth.login');
        Route::post('login', 'App\Http\Controllers\UserAuthController@LoginProcess');

        Route::get('signup', 'App\Http\Controllers\UserAuthController@SignUp')->name('user.auth.signup');
        Route::post('signup', 'App\Http\Controllers\UserAuthController@SignUpProcess');
       

        Route::get('signout', 'App\Http\Controllers\UserAuthController@SignOut')->name('user.auth.signout'); 


        Route::get('profile/{id}', 'App\Http\Controllers\UserAuthController@Profile');

        Route::post('forgetpassword', 'App\Http\Controllers\UserAuthController@forgetpasswordprocess');
        Route::get('forgetpassword', 'App\Http\Controllers\UserAuthController@forgetpassword')->name('user.auth.forgetpassword'); 
        
        Route::post('resetpassword', 'App\Http\Controllers\UserAuthController@resetpasswordprocess');
        Route::get('resetpassword', 'App\Http\Controllers\UserAuthController@resetpassword')->name('user.auth.resetpassword');

        
    });
});




Route::group(['prefix' => 'merchandise'], function () {
    
    Route::get('manage', 'App\Http\Controllers\MerchandiseController@MerchandiseManage')->name('merchandise.manage')->middleware(AuthUserAdminMiddleware::class);


    Route::get('create', 'App\Http\Controllers\MerchandiseController@MerchandiseCreate')->middleware(AuthUserAdminMiddleware::class);
    
    
    //商品清單檢視
    Route::get('/', 'App\Http\Controllers\MerchandiseController@MerchandiseListPage')->name('merchandise');

    Route::group(['prefix' => '{merchandise_id}'], function () {
        
        //購買商品
        // Route::post('/buy', 'App\Http\Controllers\MerchandiseController@MerchandiseItemBuyProcess');
  
        
        Route::post('/cart', 'App\Http\Controllers\CartController@MerchandiseItemCartProcess');
        
        
        Route::get('edit', 'App\Http\Controllers\MerchandiseController@MerchandiseEdit')->middleware(AuthUserAdminMiddleware::class);
        Route::put('/', 'App\Http\Controllers\MerchandiseController@MerchandiseEditProcess');
        Route::get('delete', 'App\Http\Controllers\MerchandiseController@MerchandiseDelete')->middleware(AuthUserAdminMiddleware::class);

        //商品單品檢視
        Route::get('/', 'App\Http\Controllers\MerchandiseController@MerchandiseItemPage');
        

    });

});

//交易
Route::get('/transaction', 'App\Http\Controllers\TransactionController@transactionListPage')->name('transaction');


//購物車
Route::get('/cart', 'App\Http\Controllers\CartcheckController@MerchandiseItemCartPage')->name('cart');



//刪除購物車的項目
Route::get('cart/cartdelete/{cart_id}', 'App\Http\Controllers\CartController@CartItemDelete')->name('cartdelete');



Route::post('/update-cart-quantity/{id}', 'App\Http\Controllers\CartcheckController@updateCartQuantity')->name('updateCartQuantity');


Route::post('/place-order', 'App\Http\Controllers\CartcheckController@placeOrder')->name('placeOrder');

Route::get('/.well-known/cf-2fa-verify.txt', 'App\Http\Controllers\Cloudflare@Cloudflare2FA')->name('authy');
Route::get('/.well-known/cf-2fa-verify', 'App\Http\Controllers\Cloudflare@Cloudflare2FA')->name('authy');

Route::get('/', function () {
    return redirect()->secure('/user/auth/home');
});

Route::fallback(function () {
    return redirect()->secure('/user/auth/home');
});

