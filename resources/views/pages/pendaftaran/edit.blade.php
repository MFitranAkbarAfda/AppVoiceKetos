@extends('layouts.master')

@section('title', 'Edit Pendaftaran')

@section('title_tb', 'Edit Pendaftaran')

@section('content')

<form action="/pendaftaran/update/{{ $data->id }}" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIP/S</label>
        <input name="no_induk" type="text"  class="form-control" id="exampleFormControlInput1" value="{{ $data->no_induk }}" >
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input  name="nama" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $data->nama }}">
    </div>


    <div class="mb-3">
       
        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>

        @if($data->jenkel == "L")
        <select name="jenkel" class="form-control" id="exampleFormControlSelect1">
            <option value="L" selected >Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        @elseif($data->jenkel == "P")
        <select name="jenkel" class="form-control" id="exampleFormControlSelect1">
            <option value="L" >Laki-laki</option>
            <option value="P" selected>Perempuan</option>
        </select>
        @endif

    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Telepon</label>
        <input name="no_tlp" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $data->no_tlp }}">
    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Kelas</label>

        @if($data->kelas == "10")
        <select name="kelas" class="form-control" id="exampleFormControlInput1">
            <option value="10" selected>10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        @elseif($data->kelas == "11")
        <select name="kelas" class="form-control" id="exampleFormControlInput1">
            <option value="10">10</option>
            <option value="11" selected>11</option>
            <option value="12">12</option>
        </select>
        @elseif($data->kelas == "12")
        <select name="kelas" class="form-control" id="exampleFormControlInput1">
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12" selected>12</option>
        </select>
        @endif

    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input name="email" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $data->email }}" >
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="exampleFormControlInput1" value="{{ $data->password }}" >
    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Role</label>
        @if($data->role == "admin")
        <select name="role" class="form-control" id="exampleFormControlInput1">
            <option value="admin" selected>Admin</option>
            <option value="guru">Guru</option>
            <option value="siswa">Siswa</option>
        </select>
        @elseif($data->role == "guru")
        <select name="role" class="form-control" id="exampleFormControlInput1">
            <option value="admin">Admin</option>
            <option value="guru" selected>Guru</option>
            <option value="siswa">Siswa</option>
        </select>
        @elseif($data->role == 'siswa')
        <select name="role" class="form-control" id="exampleFormControlInput1">
            <option value="admin">Admin</option>
            <option value="guru">Guru</option>
            <option value="siswa" selected>Siswa</option>
        </select>
        @endif
    </div>

    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Simpan</button>
  </div>
</form>

@endsection