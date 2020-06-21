<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = User::all();
        return view('member.index', ['member' => $member]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ngaran' => 'required',
            'nomer' => 'required|size:9',
            'email' => 'required',
            'hobi' => 'required',
            'gawean' => 'required'

        ]);

        User::create($request->all());



        return redirect('/member')->with('status', 'data ges atup ey');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $member
     * @return \Illuminate\Http\Response
     */
    public function show(User $member)
    {
        return view('member.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(User $member)
    {
        return view('member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $member)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required'
        ]);


        User::where('id', $member->id)
            ->update([
                'role' => $request->role,
                'name' => $request->name,
                'email' => $request->email,
                'avatar' => $request->avatar
            ]);
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $member->avatar = $request->file('avatar')->getClientOriginalName();
            $member->save();
        }
        return redirect('/member')->with('status', 'data ges robah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $member)
    {

        User::destroy($member->id);
        return redirect('/member')->with('status', 'data ges ges lengit');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
