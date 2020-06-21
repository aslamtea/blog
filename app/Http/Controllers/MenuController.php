<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{


    public function index()
    {
        $mahasiswa = Menu::all();
        return view('menu.index', ['menu' => $mahasiswa]);
    }
    public function create()
    {
        return view('menu.create', compact('menu'));
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
            'menu_id' => 'required',
            'm_id' => 'required',
            'icon' => 'required',
        ]);

        Menu::create($request->all());



        return redirect('/menu')->with('status', 'data ges atup ey');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        $mahasiswa = Menu::all();
        return view('menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {

        $request->validate([
            'munuid' => 'required',
        ]);


        Menu::where('id', $menu->id)
            ->update([
                'munuid' => $request->munuid,
            ]);

        return redirect('/menu')->with('status', 'data ges robah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {

        Menu::destroy($menu->id);
        return redirect('/menu')->with('status', 'data ges ges lengit');
    }
}
