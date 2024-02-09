<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordExpiredPostRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

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
        return redirect()->back()->with(['status' => trans('auth.password.expired.message.password_changed_successfully')]);
    }
}
