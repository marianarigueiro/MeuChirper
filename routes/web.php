<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Chirp;
use App\Http\Controllers\ChirpController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/
Route::get('/', [ChirpController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| CHIRPS
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::post('/chirps', [ChirpController::class, 'store'])
        ->name('chirps.store');

    Route::get('/chirps/{chirp}/edit', [ChirpController::class, 'edit'])
        ->name('chirps.edit');

    Route::put('/chirps/{chirp}', [ChirpController::class, 'update'])
        ->name('chirps.update');

    Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy'])
        ->name('chirps.destroy');
});

/*
|--------------------------------------------------------------------------
| PROFILE
|--------------------------------------------------------------------------
*/
Route::get('/profile/{id}', function ($id) {

    $user = User::findOrFail($id);

    $chirps = $user->chirps()
        ->latest()
        ->get();

    return view('profile', [
        'user' => $user,
        'chirps' => $chirps,
        'totalChirps' => $chirps->count(),
    ]);
})->name('profile.show');

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

// LOGIN
Route::get('/login', fn () => view('auth.login'))->name('login');

Route::post('/login', function (Request $request) {

    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('home');
    }

    return back()->withErrors([
        'email' => 'Email ou senha inválidos',
    ]);
});

// REGISTER
Route::get('/register', fn () => view('auth.register'))->name('register');

Route::post('/register', function (Request $request) {

    $data = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'unique:users'],
        'password' => ['required', 'min:6'],
    ]);

    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);

    Auth::login($user);

    return redirect()->route('home');
});

// LOGOUT
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('home');
})->name('logout');

/*
|--------------------------------------------------------------------------
| ABOUT
|--------------------------------------------------------------------------
*/
Route::get('/about', fn () => view('about'))->name('about');