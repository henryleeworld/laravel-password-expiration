<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordExpiredPostRequest;
use Illuminate\Support\Carbon;

class ExpiredPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.passwords.expired');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PasswordExpiredPostRequest $request)
    {
        $request->user()->update([
            'password'            => $request->password,
            'password_changed_at' => Carbon::now()->toDateTimeString()
        ]);
        return redirect()->back()->with(['status' => __('Password changed successfully')]);
    }
}
