<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RegisterController extends Controller
{
    public function index() {
        $users = User::all();

        return Inertia::render('Home/UsersRegistered', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return Inertia::render('Register');
    }

    public function store(Request $request)
    {
        $request->merge(['password', bcrypt($request->input('password'))]);
        User::create($request->all());
        
        return redirect('/');
    }

    public function destroy(Request $request) {
        User::destroy($request->input('id'));
    }
}
