<?php

namespace App\Http\Controllers;

use App\Models\KosaKata;
use Illuminate\Http\Request;

class KosaKataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kosakatas = Kosakata::all();
        if ($kosakatas) {
            return response()->json([
                'success' => true,
                'message' => 'Get Data Kosa Kata Success',
                'data' => $kosakatas
            ]);
        }
        return response()->json([
            'succes' => false,
            'message' => 'Geta Data Kosa Kata Failed'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'kosa_kata' => 'required',
            'arti' => 'required',
            'detail' => 'required',
            'ucapan_talawi' => 'required',
            'ucapan_indonesia' => 'required'
        ]);

        $kosaKata = KosaKata::create([
            'kosa_kata' => $request->kosa_kata,
            'arti' => $request->arti,
            'detail' => $request->detail,
            'ucapan_talawi' => $request->ucapan_talawi,
            'ucapan_indonesia' => $request->ucapan_indonesia,
        ]);

        $kosaKata->save();
        if ($kosaKata) {
            return response()->json([
                'success' => true,
                'message' => 'kosa kata berhasil ditambahkan',
                'data' => $kosaKata
            ]);
        }
        return response()->json([
            'succes' => false,
            'message' => 'gagal'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KosaKata  $kosaKata
     * @return \Illuminate\Http\Response
     */
    public function show(KosaKata $kosaKata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KosaKata  $kosaKata
     * @return \Illuminate\Http\Response
     */
    public function edit(KosaKata $kosaKata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KosaKata  $kosaKata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KosaKata $kosaKata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KosaKata  $kosaKata
     * @return \Illuminate\Http\Response
     */
    public function destroy(KosaKata $kosaKata)
    {
        //
    }
}
