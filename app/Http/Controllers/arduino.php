<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbkomponen;

class arduino extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kdt = tbkomponen::get();
        $jdpg = "Daftar Data";
        return view('Data',compact('kdt','jdpg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //form menambahkan data baru
        $jdpg = "Menambah Data";
        return view('DataTambah',compact('jdpg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ambil data

        if($request->file("fGAMBAR")){
            $fl = $request->file("fGAMBAR");
            $flname = $fl->getClientOriginalName();
            $fl->move(public_path("images"),$flname);
        tbkomponen::create([
            'komponens'=>$request->txKOMPONEN,
            'jenis'=>$request->txJENIS,
            'fungsi'=>$request->txFUNGSI,
            'flname'=>$flname,
        ]);

        }
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    //ke edit
    {
        $idc = $id;
        $kdt = tbkomponen::where('ID',$id)->first();
        $jdpg = "Edit Data";

        $jKomponen="";
        $jBoard="";
        $jProject ="";
        switch($kdt->jenis){
            case "board":
                $jBoard=" selected";
                break;
            case "project":
                $jProject =" selected";
                break;
            default:
                $jKomponen=" selected";
                break;
        }
        return view('DataEdit',compact('idc','kdt','jdpg','jKomponen','jBoard','jProject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->file("fGAMBAR")){
            $fl = $request->file("fGAMBAR");
            $flname = $fl->getClientOriginalName();
            $fl->move(public_path("images"),$flname);
        tbkomponen::where("ID",$id)->update([
            'komponens'=>$request->txKOMPONEN,
            'jenis'=>$request->txJENIS,
            'fungsi'=>$request->txFUNGSI,
            'flname'=>$flname,
        ]);
        }

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tbkomponen::where("ID",$id)->delete();
        return redirect()->route('admin.index');
    }
}