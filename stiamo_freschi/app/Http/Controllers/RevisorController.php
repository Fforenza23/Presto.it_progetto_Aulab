<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Mail\MakeMailPippo;
use App\Models\User;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;



class RevisorController extends Controller
{

    public function index()
    {
        // voglio passare i primi 5 annunci
        /* $announcement_to_check = Announcement::where('is_accepted', null)->orderBy('created_at', 'desc')->take(5)->get(); */
        $announcement_to_check = Announcement::where('is_accepted', null)->orderBy('created_at', 'desc')->first();
        return view('dashboard-revisore', compact('announcement_to_check'));

    }

    public function acceptAnnouncement(Announcement $announcement)
    {

        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai accettato l\'annuncio');
    }

    public function rejectAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti, hai rifiutato l\'annuncio');
    }

    public function becomeRevisor()
    {

        $user = Auth::user();
        Mail::to('admin@presto.it')->send(new BecomeRevisor($user));
        return redirect()->back()->with('message', 'Complimenti! Hai richiesto di diventare revisore correttamente');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('presto:makeUserRevisor', ["email" => $user->email]);
        return redirect('/')->with('message', 'Complimenti! L\'utente è diventato revisore');
    }


}