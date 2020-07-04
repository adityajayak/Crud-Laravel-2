<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function index()
    {
        $pertanyaan = PertanyaanModel::get_all();
        return view('pertanyaan.index', compact('pertanyaan'));
    }
    public function create()
    {
        $pertanyaan = PertanyaanModel::get_all();
        return view('pertanyaan.form');
    }

    public function store(Request $request)
    {
        $new_pertanyaan = PertanyaanModel::save($request->all());
        return redirect('/pertanyaan');
    }
    public function answ($id)
    {
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('pertanyaan.answ', compact('pertanyaan'));
    }
    public function edit($id)
    {
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }
    public function update($id, Request $request)
    {
        $pertanyaan = PertanyaanModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }
}