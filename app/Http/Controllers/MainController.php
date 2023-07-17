<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class MainController extends Controller
{
    public function index()
    {
        return Inertia::render('Profile');
    }

    public function email(Request $request)
    {
        $email = new Email();
        $email->email = $request->email;
        $email->user_id = Auth::user()->id;
        $email->save();

        return "success";
    }
}
