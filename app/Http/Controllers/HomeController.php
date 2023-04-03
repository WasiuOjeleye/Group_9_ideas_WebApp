<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;
use Carbon\Carbon;
use Session;
use Auth;
use Hash;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $users = DB::table('users')->count();
        $countideas = DB::table('ideas')->count();
        $spec_ideas = Idea::where('target_group' , Auth::user()->ideas);        
        $ideas = DB::table('ideas')->get();
        $spec_ideass=DB::table('ideas')->where('target_group' , Auth::user()->ideas)->get();
        $admin_ideas=DB::table('ideas')->where('posted_by' , Auth::user()->name)->get();
        $user_activity_logs = DB::table('user_activity_logs')->count();
        $activity_logs = DB::table('activity_logs')->count();
        return view('home',compact('ideas','users','user_activity_logs','activity_logs', 'countideas', 'spec_ideas', 'spec_ideass', 'admin_ideas'));
    }
}
