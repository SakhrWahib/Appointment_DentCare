<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here auth.login where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('languageConverter/{locale}', function($locale) {
    if (in_array($locale, ['ar', 'en'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('languageConverter');


Route::group(['middleware' => ['auth','isAdmin'],'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    Route::delete('permissions_mass_destroy', [\App\Http\Controllers\Admin\PermissionController::class, 'massDestroy'])->name('permissions.mass_destroy');
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::delete('roles_mass_destroy', [\App\Http\Controllers\Admin\RoleController::class, 'massDestroy'])->name('roles.mass_destroy');
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::delete('users_mass_destroy', [\App\Http\Controllers\Admin\UserController::class, 'massDestroy'])->name('users.mass_destroy');

    // services
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);
    Route::delete('services_mass_destroy', [\App\Http\Controllers\Admin\ServiceController::class, 'massDestroy'])->name('services.mass_destroy');

    // employees
    Route::resource('employees', \App\Http\Controllers\Admin\EmployeeController::class);
    Route::delete('employees_mass_destroy', [\App\Http\Controllers\Admin\EmployeeController::class, 'massDestroy'])->name('employees.mass_destroy');
    Route::post('employees/media', [\App\Http\Controllers\Admin\EmployeeController::class, 'storeMedia'])->name('employees.storeMedia');

    // client
    Route::resource('clients', \App\Http\Controllers\Admin\ClientController::class);
    Route::delete('clients_mass_destroy', [\App\Http\Controllers\Admin\ClientController::class, 'massDestroy'])->name('clients.mass_destroy');
    Route::post('clients/media', [\App\Http\Controllers\Admin\ClientController::class, 'storeMedia'])->name('clients.storeMedia');

    // appointment

Route::get('admin.appointments.index', [\App\Http\Controllers\Admin\AppointmentController::class, 'index'])->name('admin.appointments.index');

    Route::resource('appointments', \App\Http\Controllers\Admin\AppointmentController::class);
    Route::delete('appointments_mass_destroy', [\App\Http\Controllers\Admin\AppointmentController::class, 'massDestroy'])->name('appointments.mass_destroy');

    Route::get('calendar', [\App\Http\Controllers\Admin\CalendarController::class, 'index'])->name('calendar');
});

Auth::routes(['register' => false]);


Route::get('service', [ServiceController::class, 'index'])->name('service');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
