<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbkomponen;

class project01 extends Controller
{
    function home(){
        $jdpg="My Sensor Project";
        $kdt = tbkomponen::where('jenis','project')->first();
        $kdc = tbkomponen::where('jenis','project')->get();
        return view('home',compact('jdpg','kdt','kdc'));
    }

    function code(){
        $jdpg="Code Dari Project";
        $kdb = tbkomponen::where('jenis','board')->get();
        return view('Code',compact('jdpg','kdb'));
    }

    function komponen(){
        $jdpg="Daftar Komponen";
        $kda = tbkomponen::where('jenis','komponen')->get();
        $kdb = tbkomponen::where('jenis','board')->get();
        $kdc = tbkomponen::where('jenis','project')->get();
        return view('komponen',compact('jdpg','kda','kdb','kdc'));
    }
    
}
