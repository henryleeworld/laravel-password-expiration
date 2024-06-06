<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordExpiredPostRequest;
use Illuminate\Support\Carbon;

class ExpiredPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Expired Password Controller
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        return view('auth.passwords.expired');
    }

    public function store(PasswordExpiredPostRequest $request)
    {
        $request->user()->update([
            'password'            => $request->password,
            'password_changed_at' => Carbon::now()->toDateTimeString()
        ]);
        return redirect()->back()->with(['status' => __('Password changed successfully')]);
    }
}
