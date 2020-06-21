<?php

use Illuminate\Support\Facades\DB;

function __construct()
{
    $this->middleware('auth');
    $this->middleware('cekrole');
}

function Alya()
{
    $kon = auth()->user()->role;
    $ki = DB::table('menu')
        ->select('menu.m_id', 'menu.menu_id', 'menu.icon')
        ->join('akses_id', 'menu.m_id', '=', 'akses_id.menu_id')
        ->where('akses_id.role_id', '=', $kon)
        ->get();

    return $ki;
}



function oke()
{


    $ki = DB::table('submenu')
        ->select('submenu.*', 'menu.menu_id')
        ->join('menu', 'submenu.role_id', '=', 'menu.m_id')
        ->get();
    return $ki;
}
