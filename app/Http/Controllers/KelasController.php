<?php

namespace App\Http\Controllers;

use App\Kelas;
use Directory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
      $kelas = Kelas::all();
      return view('kelas.index',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Menampilkan ke halaman Form Inputs
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $kelas = new Kelas();
        $kelas->nama = $request->nama;
        $kelas->save();
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kelas = Kelas::findOrFail($id);
        return view('kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $kelas = Kelas::findOrFail($id);
        $kelas->nama = $request->nama;
        $kelas->save();
        return redirect()->route('kelas.index');
    }


    public function destroy($id)
    {
        //
        $kelas = Kelas::findOrFail($id)->delete();
        return redirect()->route('kelas.index');
    }
}
