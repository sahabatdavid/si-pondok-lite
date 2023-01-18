<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // untuk menampilkan semua data
        $santris = Santri::all();
        return view('santri.index', compact('santris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // untuk menampilkan view dari form untuk tambah data
        return view('santri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // $_POST[]
    {
        // logic untuk tambah data
        Santri::create([
            'user_id'   => 1,
            'nisn'      => $request->nisn,
            'nik'       => $request->nik,
            'ttl'       => $request->ttl,
            'alamat'    => $request->alamat
        ]);

        return redirect()->route('santri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // untuk single data
        $santri = Santri::find($id);

        return view('santri.show', compact('santri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $santri = Santri::find($id);

        return view('santri.edit', compact('santri'));
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
        $santri = Santri::find($id);

        $santri->nisn   = $request->nisn;
        $santri->nik   = $request->nik;
        $santri->ttl   = $request->ttl;
        $santri->alamat   = $request->alamat;

        $santri->save();

        return redirect()->route('santri.index');

        // Santri::create([
        //     'user_id'   => 1,
        //     'nisn'      => $request->nisn,
        //     'nik'       => $request->nik,
        //     'ttl'       => $request->ttl,
        //     'alamat'    => $request->alamat
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $santri = Santri::find($id);
        $santri->delete();

        return redirect()->route('santri.index');
    }
}
