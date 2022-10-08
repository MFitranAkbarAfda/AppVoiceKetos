@extends('layouts.master')

@section('title', 'Edit Candidate')

@section('title_tb', 'Candidate')

@section('content')

<form action="/candidate/update/{{ $candidate->id_candidate }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @method('put')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Candidate</label>
        <input name="nm_candidate" type="text"  class="form-control" value="{{ $candidate->nm_candidate }}" id="exampleFormControlInput1">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
        <select name="id_kategori" id="" class="form-control">
            @foreach($kategori as $k)
                <option value="{{ $k->id_kategori }}" {{ $k->id_kategori == $candidate->id_kategori ? 'selected' : '' }}>{{ $k->nm_kategori }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
        <select name="kelas" class="form-control" id="exampleFormControlInput1">
            @if($candidate->kelas == "10")
            <option value="10" selected>10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            @elseif($candidate->kelas == "11")
            <option value="10">10</option>
            <option value="11" selected>11</option>
            <option value="12">12</option>
            @elseif($candidate->kelas == "12")
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12" selected>12</option>
            @endif
        </select>
    </div>

   

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
        <input name="ttl" type="date" class="form-control" value="{{ $candidate->ttl }}" id="exampleFormControlInput1">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
        <select name="jenkel" class="form-control" id="exampleFormControlSelect1">
            @if($candidate->jenkel == "L")
            <option value="L" selected>Laki-laki</option>
            <option value="P">Perempuan</option>
            @elseif($candidate->jenkel == "P")
            <option value="L">Laki-laki</option>
            <option value="P" selected>Perempuan</option>
            @endif
        </select>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Visi</label>
                <textarea name="visi" class="form-control" id="" cols="30" rows="10">{{ $candidate->visi }}</textarea>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Misi</label>
                <textarea name="misi" class="form-control" id="" cols="30" rows="10">{{ $candidate->misi }}</textarea>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <div class="form-group">
            <img src="{{ url('/assets/image/foto_candidate/'. $candidate->foto) }}" style="width:130px" alt="">
        </div>
    </div>
    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Foto</label>
        <input type="file" name="foto" value="{{ $candidate->foto }}" class="form-control">
    </div>
    

    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Simpan</button>
  </div>
</form>

@endsection