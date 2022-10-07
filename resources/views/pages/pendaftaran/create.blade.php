@extends('layouts.master')

@section('title', 'Tambah Pendaftaran')

@section('title_tb', 'Pendaftaran')

@section('content')

<form action="/pendaftaran/store" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIP/S</label>
        <input name="no_induk" type="text"  class="form-control" id="exampleFormControlInput1">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input  name="nama" type="text" class="form-control" id="exampleFormControlInput1">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
        <select name="jenkel" class="form-control" id="exampleFormControlSelect1">
            <option value="L" >Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Telepon</label>
        <input name="no_tlp" type="text" class="form-control" id="exampleFormControlInput1">
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
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input name="email" type="text" class="form-control" id="exampleFormControlInput1" >
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="exampleFormControlInput1" >
    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Role</label>
        <select name="role" class="form-control" id="exampleFormControlInput1">
            <option value="admin">Admin</option>
            <option value="guru">Guru</option>
            <option value="siswa">Siswa</option>
        </select>
    </div>

    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Simpan</button>
  </div>
</form>

@endsection