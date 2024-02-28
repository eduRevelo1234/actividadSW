<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:20', 'min:2', 'regex:/^[^\d\s]+$/'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'surname' => ['required', 'string', 'max:40', 'min:2', 'regex:/^[^\d\s]+$/'],
            'dni' => ['required', 'string', 'regex:/^\d{8}[a-zA-Z]$/'],
            'telephone' => ['nullable', 'max:12', 'min:9', 'regex:/^\+?\d{9,12}$/'],
            'bankingAccount' => ['required', 'regex:/^[a-zA-Z]{2}\d{22}$/'],
            'about' => ['nullable', 'max:250', 'min:20'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'surname' => $request->surname,
            'dni' => $request->dni,
            'telephone' => $request->telephone,
            'bankingAccount' => $request->bankingAccount,
            'about' => $request->about,
            'country' => $request->country,
        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
