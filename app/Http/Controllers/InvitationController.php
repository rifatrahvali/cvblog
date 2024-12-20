<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Invitation;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvitationMail;

# InvitationController: Davet oluşturma, listeleme, mail gönderme.
class InvitationController extends Controller
{
    //
    public function index()
    {
        $invitations = Invitation::all();
        return view('admin.pages.invitations.index', compact('invitations'));
    }

    public function create()
    {
        return view('admin.pages.invitations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:invitations,email',
        ]);

        $token = Str::random(40);
        $invitation = Invitation::create([
            'email' => $request->email,
            'token' => $token,
            'expires_at' => now()->addDays(2),
        ]);

        Mail::to($invitation->email)->send(new InvitationMail($invitation));

        return redirect()->route('invitations.index')->with('success','Davet oluşturuldu ve mail gönderildi!');
    }
    public function destroy($id)
{
    $invitation = Invitation::findOrFail($id);
    $invitation->delete();

    return redirect()->route('invitations.index')->with('success', 'Davet başarıyla silindi.');
}
}
