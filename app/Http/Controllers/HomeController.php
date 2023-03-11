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
        $staff = DB::table('staff')->count();
        $users = DB::table('users')->count();
        $ideas = DB::table('ideas')->count();
        $spec_ideas = Idea::where('target_group' , Auth::user()->ideas);
       
        $user_activity_logs = DB::table('user_activity_logs')->count();
        $activity_logs = DB::table('activity_logs')->count();
        return view('home',compact('staff','users','user_activity_logs','activity_logs', 'ideas', 'spec_ideas'));
    }
}
