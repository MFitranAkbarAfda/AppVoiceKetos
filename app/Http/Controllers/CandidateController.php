<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use App\Kategori;

class CandidateController extends Controller
{
    /**
    
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    
    */

    public function index()
    {
        $no = 1;
        $candidate = Candidate::all();
        return view('pages.candidate.index', compact('candidate','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('pages.candidate.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nm_candidate' => 'required',
            'id_kategori' => 'required',
            'kelas' => 'required',
            'ttl' => 'required',
            'jenkel' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'foto' => 'required',
        ]);

        $image = $request->file('foto');

        $imagecandidate = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/image/foto_candidate'), $imagecandidate);

        

        Candidate::create([
            'nm_candidate' => $request->nm_candidate,
            'id_kategori' => $request->id_kategori,
            'kelas' => $request->kelas,
            'ttl' => $request->ttl,
            'jenkel' => $request->jenkel,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'foto' => $imagecandidate
        ]);

        return redirect('/candidate');
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
    {
        $candidate = Candidate::find($id);
        $kategori = Kategori::all();
        return view('pages.candidate.edit', compact('candidate','kategori'));
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
            'nm_candidate'        => 'required',
            'id_kategori'         => 'required',
            'kelas'               => 'required',
            'ttl'                 => 'required',
            'jenkel'              => 'required',
            'visi'                => 'required',
            'misi'                => 'required',
            'foto'                => 'required',

        ]);


            $mobil = Candidate::find($id);
            $mobil->plat_mobil  = $request->plat_mobil;
            $mobil->nama_mobil  = $request->nama_mobil;
            $mobil->tahun       = $request->tahun;
            $mobil->harga       = $request->harga;
            $mobil->warna       = $request->warna;
            $mobil->save();

            return redirect('/mobil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
