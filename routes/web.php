<?php
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\loginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

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

Route::get('/', [MembershipController::class, 'showForm'])->name('membership.form');
Route::get('Mhs', [DataController::class, 'index'])->name('login.page');
Route::get('kategori', [DataController::class,'kategori'])->name('kategori');
Route::get(' register/{id_kategori}', [loginController::class,'halamanR']);
Route::post('login', [loginController::class,'Login'])->name('login');
Route::post('logout.php', [loginController::class,'Logout']);
Route::get('/servis', function () {
    return view('Servis');
});
Route::get('/halaman', function () {
    return view('Halaman');
});
Route::get('/tentangkami', function () {
    return view('Tentangkami');
});
Route::get('/harga', function () {
    return view('Harga');
});
Route::get('/riview', function () {
    return view('Riview');
});
Route::get('/login', [loginController::class,'halamanL']);

Route::get('/membership', [MembershipController::class, 'showForm'])->name('membership.form')->middleware('guest');
Route::post('/register', [MembershipController::class, 'register'])->name('register.process');


// Route group
// Admin
Route::group(['middleware' => ['role:admin']],function(){
    Route::get('dashboard', [DataController::class,'dasboard'])->name('index');
    Route::get('change-password',[loginController::class,'ChangePassword']);
    Route::get('adkategori',[DataController::class,'Adkategori']);
    Route::get('datamember',[DataController::class,'DataMember']);
    Route::get('page',[DataController::class,'Page']);
    Route::post('confrim',[DataController::class,'confrim']);
    Route::get('datamasuk',[DataController::class,'Datamasuk']);
    Route::post('confrimP/{id}',[DataController::class,'ConfrimP']);
    Route::post('tambahK', [DataController::class,'createK'])->name('tambahK');
    Route::post('/deleteK/{id}', [DataController::class,'deleteK'])->name('deleteK');
    Route::post('editK/{id}', [DataController::class,'updateK'])->name('editK');
    Route::get('editKK/{id}', [DataController::class,'editK'])->name('edit');
    Route::post('/deleteU/{id}', [DataController::class,'deleteU'])->name('deleteU');


});

// User
Route::group(['middleware' => ['role:user']],function(){
    Route::get('dasboarduser',[MembershipController::class,'Dasboarduser']);
    Route::get('/register-success', [MembershipController::class,'showSuccess'])->name('register.success');
    Route::get('halamanbutton',[MembershipController::class,'Buttonhalaman']);
    Route::get('transaksi',[MembershipController::class,'Transaksi']);
    Route::get('viewngenteni',[MembershipController::class,'Ngenteni']);

});
Route::post('confrim.pembayaran',[MembershipController::class,'confrimPembayaran']);