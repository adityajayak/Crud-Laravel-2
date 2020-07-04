<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjawabModel;


class PenjawabController extends Controller
{
    public function indeks()
    {
        $penjawab = PenjawabModel::get_all();
        return view('penjawab.indeks', compact('penjawab'));
    }
    public function make()
    {
        $penjawab = PenjawabModel::get_all();
        return view('pertanyaan.jawab');
    }

    public function storej(Request $request)
    {
        $new_penjawab = PenjawabModel::save($request->all());
        return redirect('/penjawab');
    }
}
