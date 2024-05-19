<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use DB;

class ProfileController extends Controller
{
    /**
     * Get the Employee Profile from table profiles based on user id from table users
     */
    public function index(){
        $employeeProfile = DB::table('profiles')
        ->join('users', 'profiles.user_id', '=', 'users.id')
        ->select('users.role as role', 'users.name as name', 'profiles.position as position', 'profiles.department as department')
        ->where('profiles.user_id', '=', Auth::user()->id)
        ->get();
         return view('profile.profile',  ['employeeProfile' => $employeeProfile]);
    }

}
