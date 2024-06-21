    <?php

    use App\Models\PaketWisata;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
    */

    Route::get('/wisata', function(){
        $data = PaketWisata::where('type', 'wisata')->get();
        return response($data);
    });

    Route::get('/camping', function(){
        $data = PaketWisata::where('type', 'camping')->get();
        return response($data);
    });