@extends('layouts.master')

@section('title', 'Tambah Candidate')

@section('title_tb', 'Candidate')

@section('content')

<form action="/candidate/store" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Candidate</label>
        <input name="nm_candidate" type="text"  class="form-control" id="exampleFormControlInput1">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
        <select name="id_kategori" id="" class="form-control">
            @foreach($kategori as $k)
                <option value="{{ $k->id_kategori }}">{{ $k->nm_kategori }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
        <select name="kelas" class="form-control" id="exampleFormControlInput1">
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
    </div>

   

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
        <input name="ttl" type="date" class="form-control" id="exampleFormControlInput1">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
        <select name="jenkel" class="form-control" id="exampleFormControlSelect1">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Visi</label>
                <textarea name="visi" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Misi</label>
                <textarea name="misi" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
    </div>
    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    

    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Simpan</button>
  </div>
</form>

@endsection