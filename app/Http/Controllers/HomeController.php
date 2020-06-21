<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function edit(User $user)
    {
        return view('home.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'avatar' => 'required'
        ]);


        $user = User::find($id);
        $user->update($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('img/', $request->file('avatar')->getClientOriginalName());
            $user->avatar = $request->file('avatar')->getClientOriginalName();
            $user->save();
        }
        return redirect('home')->with('status', 'data ges robah');
    }
    public function ganti(user $user)
    {
        return view('home.ganti', compact('user'));
    }

    public function robah(Request $request, $id)
    {
        if (!(Hash::check($request->get('konkon'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }

        if (strcmp($request->get('konkon'), $request->get('konkon1')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $request->validate([
            'konkon' => 'required',
            'konkon1' => 'required|string|min:8',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('konkon1'));
        $user->save();


        return redirect('home')->with('status', 'data ges robah');
    }
    public function show(user $user)
    {
        return view('home', compact('user'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
