<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asrama;

class AsramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asramas = Asrama::all();
        return view('asrama.index', compact('asramas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asrama.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asrama = new Asrama;
        $asrama->nama   = $request->nama;

        $asrama->save();

        return redirect()->route('asrama.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asrama = Asrama::find($id);

        return view('asrama.show', compact('asrama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asrama = Asrama::find($id);

        return view('asrama.edit', compact('asrama'));
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
        $asrama = Asrama::find($id);
        $asrama->nama   = $request->nama;

        $asrama->save();

        return redirect()->route('asrama.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asrama = Asrama::find($id);
        $asrama->delete();

        return redirect()->route('asrama.index');
    }
}
