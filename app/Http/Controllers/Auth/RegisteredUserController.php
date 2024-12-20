<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Invitation;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

# Auth\RegisteredUserController: Token doğrulama ve register işlemleri.
class RegisteredUserController extends Controller
{
    //
    public function showRegistrationForm(Request $request)
    {
        $token = $request->query('token');
        $invitation = Invitation::where('token', $token)->first();

        if(!$invitation || $invitation->isExpired() || $invitation->used) {
            abort(403, 'Geçersiz veya süresi dolmuş token.');
        }

        return view('admin.pages.auth.page-register', compact('invitation'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'token' => 'required|exists:invitations,token',
            'name' => 'required|string|max:255',
            'surname' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $invitation = Invitation::where('token', $request->token)->first();

        if(!$invitation || $invitation->isExpired() || $invitation->used) {
            return redirect()->route('login')->withErrors('Token geçersiz veya kullanılmış.');
        }

        // Varsayılan rolü "kullanici" olarak set edelim
        $defaultRole = Role::where('slug','kullanici')->first();

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $invitation->email,
            'password' => Hash::make($request->password),
            'role_id' => $defaultRole ? $defaultRole->id : null,
        ]);

        $invitation->update([
            'used' => true,
            'used_at' => now()
        ]);

        Auth::login($user);

        return redirect()->route('dashboard')->with('success','Kayıt işlemi başarılı!');
    }
}
