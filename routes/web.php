<?php

use App\Models\PaketWisata;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
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
    $data = PaketWisata::all();
    
    return view('index', ['datas' => $data]);



});
Route::get('/', function (){
    return redirect('/welcome');




});


Route::get('/contact', function (){
    return view('contact');




});

Route::get('/properties', function (){
    return view('properties');




});

Route::get('/property-detail/{id}/{idTrans}', function ($id, $idTrans){
    $data = PaketWisata::find($id);
    $sum = Transaksi::find($idTrans);
    $pax = (int)$sum->pax;
    $price = (int)$data->harga;
    $total = $pax * $price;
    return view('property-detail', ['datas' => $data, 'total' => $total, 'idTrans' => $idTrans]);




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
        'role' => 'user',
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
    $faker = Faker\Factory::create('id_ID');

    if (!auth()->user()) {
        return redirect('/login');
    }

    // Validate and process the dates
    $tanggal_masuk = $request->tanggal_masuk;
    $tanggal_keluar = $request->tanggal_keluar ?? $request->tanggal_masuk;

    // Count transactions within the date range
    $countTransactions = Transaksi::where('paket_wisata_id', $request->paket_wisata)
        ->where(function ($query) use ($tanggal_masuk, $tanggal_keluar) {
            $query->where(function ($query) use ($tanggal_masuk, $tanggal_keluar) {
                $query->whereBetween('tanggal_masuk', [$tanggal_masuk, $tanggal_keluar])
                    ->orWhereBetween('tanggal_keluar', [$tanggal_masuk, $tanggal_keluar]);
            })->orWhere(function ($query) use ($tanggal_masuk, $tanggal_keluar) {
                $query->where('tanggal_masuk', '<', $tanggal_masuk)
                    ->where('tanggal_keluar', '>', $tanggal_keluar);
            });
        })
        ->count();

    $pid = PaketWisata::find($request->paket_wisata);

    // Check if the count exceeds 10
    if ($countTransactions >= 10 && $pid->type == 'camping') {
        return response('Booking Penuh');
    }

    // Create a random ID for the transaction
    $id = mt_rand(1000000, 9999999);

    // Create the transaction record
    Transaksi::create([
        'id' => $id,
        'akun_penggunas_id' => auth()->user()->id,
        'paket_wisata_id' => $request->paket_wisata,
        'pax' => $request->jumlah_peserta,
        'alamat' => $request->alamat,
        'no_telp' => $request->nomor_hp,
        'tanggal_masuk' => $tanggal_masuk,
        'tanggal_keluar' => $tanggal_keluar,
    ]);

    // Redirect to the property detail page
    return redirect("/property-detail/{$request->paket_wisata}/{$id}");
});

Route::post('/transaksi/update', function(Request $request) {
    if ($request->hasFile('bukti_transfer')) {
        $file = $request->file('bukti_transfer');
        $path = $file->store('uploads', 'public');

        $upload = Transaksi::find($request->idTrans);
        if ($upload) {
            $upload->tanggal_pembayaran = date('Y-m-d');
            $upload->bukti_transfer_path = $path; // Save the path if you have a column for it
            $upload->save();
        } else {
            return response()->json(['message' => 'Transaction not found'], 404);
        }
    } else {
        return response()->json(['message' => 'No file uploaded'], 400);
    }

    return redirect()->back()->with('success', 'Payment proof uploaded successfully.');
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
    $datas = Transaksi::where('akun_penggunas_id', auth()->user()->id)
                      ->get();

    return view('keranjang', ['datas' => $datas]);
});
Route::get('/jadwal', function (){
    return view('jadwal');




});

