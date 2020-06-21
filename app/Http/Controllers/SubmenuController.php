<?php

namespace App\Http\Controllers;

use App\Submenu;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{


    public function index()
    {
        $mahasiswa = Oke();
        $maha = Alya();
        return view('submenu.index', [
            'submenu' => $mahasiswa,
            'menu' => $maha
        ]);
    }
    public function create()
    {
        return view('submenu.create', compact('submenu'));
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
            'menu' => 'required',
            'url' => 'required',
            'role_id' => 'required',
        ]);

        Submenu::create($request->all());



        return redirect('/submenu')->with('status', 'data ges atup ey');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function show(Submenu $submenu)
    {
        $mahasiswa = Submenu::all();
        return view('submenu.show', compact('submenu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function edit(Submenu $submenu)
    {

        return view('submenu.edit', compact('submenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submenu $submenu)
    {

        $request->validate([
            'menu' => 'required',
            'url' => 'required',
            'role_id' => 'required',
        ]);


        Submenu::where('id', $submenu->id)
            ->update([
                'menu' => $request->menu,
                'url' => $request->url,
                'role_id' => $request->role_id,
            ]);

        return redirect('/submenu')->with('status', 'data ges robah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submenu $submenu)
    {

        Submenu::destroy($submenu->id);
        return redirect('/submenu')->with('status', 'data ges ges lengit');
    }
}
