<?php

namespace App\Http\Controllers;

use App\Models\Category;



use App\Models\Announcement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $announcements = Announcement::orderBy('updated_at', 'desc')->where('is_accepted', true)->get();
        return view('homepage', compact('categories', 'announcements'));
    }



    public function announcementCreate()
    {
        return view('Announcements-create', ['categories' => Category::all()]);
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function test()
    {
        return view('test-profile');
    }
    public function passwordDimenticata()
    {
        return view('auth.passwords-email');
    }

    public function accettaCookies()
    {
        return redirect()->back()->withCookie('request_user_cookies', true, 60 * 60 * 24 * 30);
    }
    public function rifiutaCookies()
    {
        return redirect()->back()->withCookie('request_user_cookies', false, 60 * 60 * 24 * 30);
    }
}