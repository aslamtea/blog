<?php

namespace App\Http\Controllers;

use App\Akses;
use App\Menu;
use Illuminate\Http\Request;

class AksesController extends Controller
{


    public function index()
    {
        $akses = Akses::orderBy('role_id', 'asc')->get();
        $menu = Menu::all();
        return view('akses.index', [
            'akses' => $akses,
            'menu' => $menu
        ]);
    }
    public function create()
    {
        return view('akses.create', compact('akses'));
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
            'role_id' => 'required',
            'menu_id' => 'required',
        ]);

        Akses::create($request->all());



        return redirect('/akses')->with('status', 'data ges atup ey');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Akses  $akses
     * @return \Illuminate\Http\Response
     */
    public function show(Akses $akses)
    {
        $mahasiswa = Akses::all();
        return view('akses.show', compact('akses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Akses  $akses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $akses = Akses::find($id);
        return view('akses.edit', ['akses' => $akses]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Akses  $akses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Akses $akses)
    {

        $request->validate([
            'munu_id' => 'required',
            'role_id' => 'required',
        ]);


        Akses::where('id', $akses->id)
            ->update([
                'menu_id' => $request->menu_id,
                'role_id' => $request->role_id,
            ]);

        return redirect('/akses')->with('status', 'data ges robah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Akses  $akses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Akses $akses)
    {

        Akses::destroy($akses->id);
        return redirect('/akses')->with('status', 'data ges ges lengit');
    }
}
