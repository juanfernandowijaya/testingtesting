<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\metadata;
use Illuminate\Http\Request;

class pengaturanHalamanController extends Controller
{
    function index(){
        $datahalaman = halaman::orderBy('judul','asc')->get();
        return view("dashboard.pengaturanhalaman.index")->with('dataHalaman', $datahalaman);
    }
    function update(Request $request){
        metadata::updateOrCreate(['meta_key' => '_halaman_about'],['meta_value' => $request->_halaman_about]);
        metadata::updateOrCreate(['meta_key' => '_halaman_interest'],['meta_value' => $request->_halaman_interest]);
        metadata::updateOrCreate(['meta_key' => '_halaman_awards'],['meta_value' => $request->_halaman_awards]);
        return redirect()->route('pengaturanhalaman.index')->with('success','Berhasil Update data Pengaturan Halaman');
    }
}
