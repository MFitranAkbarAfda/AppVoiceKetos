<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $no = 1 ; 
        $pendaftaran = Pendaftaran::all();
        return view('pages.pendaftaran.index',compact('pendaftaran', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'no_induk'=>'required',
            'nama'=>'required',
            'jenkel'=>'required',
            'no_tlp'=>'required',
            'kelas'=>'required',
            'email'=>'required',
            'password'=>'required',
            'role'=>'required'
        ]);

        Pendaftaran::create([
            'no_induk'=>$request->no_induk,
            'nama'=>$request->nama,
            'jenkel'=>$request->jenkel,
            'no_tlp'=>$request->no_tlp,
            'kelas'=>$request->kelas,
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>$request->role
        ]);

        return redirect('/pendaftaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pendaftaran::where('id', $id)->first();
        return view('pages.pendaftaran.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pendaftaran::where('id', $id)->first();
        return view('pages.pendaftaran.edit', compact('data'));
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
            $this->validate($request,[
                'no_induk'      =>'required',
                'nama'          =>'required',
                'jenkel'        =>'required',
                'no_tlp'        =>'required',
                'kelas'         =>'required',
                'email'         =>'required',
                'password'      =>'required',
                'role'          =>'required'
            ]);
            
            $pendaftaran = Pendaftaran::find($id);
            $pendaftaran->no_induk  =  $request->no_induk;
            $pendaftaran->nama      =  $request->nama;
            $pendaftaran->jenkel   =  $request->jenkel;
            $pendaftaran->no_tlp    =  $request->no_tlp;
            $pendaftaran->kelas     =  $request->kelas;
            $pendaftaran->email     =  $request->email;
            $pendaftaran->password  =  $request->password;
            $pendaftaran->role      =  $request->role;
            $pendaftaran->save();

        return redirect('/pendaftaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendaftar = Pendaftaran::find($id);
        $pendaftar->delete();

        return redirect('/pendaftaran')->with('success', 'Berhasil Menghapus');
    }
}
