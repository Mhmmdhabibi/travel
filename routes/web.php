<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\FuncCall;

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

Route::get('/welcome', function (){
    return view('index');




});
Route::get('/', function (){
    return view('index');




});


Route::get('/contact', function (){
    return view('contact');




});

Route::get('/properties', function (){
    return view('properties');




});

Route::get('/property-detail', function (){
    return view('property-detail');




});


Route::get('/register', function()
{
    return view('register');
});

Route::post('/register', function(Request $request)
{

    // Create the user
    $user = User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'no_telp' => $request->input('no_telp'),
        'password' => Hash::make($request->input('password')),
    ]);

    // Log the user in after registration
    Auth::login($user);

    // Redirect to a specific page (e.g., welcome page)
    return redirect('/welcome');
});

Route::get('/login', function (){
    return view('login');
});


Route::post('/transaksi/store', function(Request $request){
    if(!auth()->user())
    {
        return redirect('/login');
    }
});

Route::post('/login', function(Request $request){
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    // Attempt to log the user in
    if (Auth::attempt($request->only('email', 'password'))) {
        // Authentication passed, redirect to intended page or home
        return redirect()->intended('/welcome');
    }

    // Authentication failed, redirect back to login form
    return redirect()->back()->withInput($request->only('email'))->withErrors([
        'email' => 'These credentials do not match our records.',
    ]);});

    Route::get('/logout', function(){
      auth()->logout();
      return redirect('/welcome');
    });


Route::get('/keranjang', function (){
    return view('keranjang');
});
Route::get('/jadwal', function (){
    return view('jadwal');




});

