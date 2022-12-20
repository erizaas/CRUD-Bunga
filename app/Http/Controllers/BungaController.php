<?php

namespace App\Http\Controllers;

use App\Models\bunga;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class BungaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $crudbunga = Bunga::all();

        return view('dashboard', compact('crudbunga'));
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'name' => 'required|min:4',
            'code' => 'required',
            'type' => 'required',
            'notes' => 'required',
            'growth' => 'required'

        ]);
        Bunga::create([
            'name' => $request->name,
            'code' => $request->code,
            'type' => $request->type,
            'notes' => $request->notes,
            'growth' => $request->growth,
            
        ]);
        //kalau berhasil tambah ke db, bakal diarahin ke halaman dashboard dengan menampilkan pemberitahuan

        Alert::success('Success', 'Berhasil tambah data!');
        return redirect('/dashboard')->with('addData', 'Berhasil menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bunga  $bunga
     * @return \Illuminate\Http\Response
     */
    public function show(bunga $bunga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bunga  $bunga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crudbunga = Bunga::where('id', $id)->first();
        return view('edit', compact('crudbunga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bunga  $bunga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request ->validate([
            'name' => 'required|min:4',
            'code' => 'required',
            'type' => 'required',
            'notes' => 'required',
            'growth' => 'required'
        ]);
        Bunga::where('id', $id)->update([
            'name' => $request->name,
            'code' => $request->code,
            'type' => $request->type,
            'notes' => $request->notes,
            'growth' => $request->growth,
        ]);
        Alert::success('Success', 'Berhasil mengubah data!');
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bunga  $bunga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bunga::where('id',$id)->delete();
        Alert::success('Success', 'Berhasil menghapus data bunga!');
        return redirect('/dashboard')->with('successDelete', 'Berhasil menghapus data Bunga');
    }
}
