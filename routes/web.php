use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FleetController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AirmanController;
use App\Http\Controllers\FlightSchoolController;

Route::get('/flightschool', [FlightSchoolController::class, 'index'])->name('flightschool.index');
Route::get('/flightschool/program', [FlightSchoolController::class, 'program'])->name('flightschool.program');
Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
Route::get('/fleet', [FleetController::class, 'index'])->name('frontend.fleet');
Route::get('/pilots', [AirmanController::class, 'index'])->name('frontend.pilots');
