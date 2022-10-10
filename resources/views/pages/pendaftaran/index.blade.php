@extends('layouts.master')

@section('title', 'Pendaftaran')

@section('title_tb', 'Pendaftaran')

@section('content')

<a href="/pendaftaran/create" class="btn btn-primary btn-sm mb-3">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Telepon</th>
      <th scope="col">Kelas</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach($pendaftaran as $p)
      <th scope="p">{{ $no++ }}</th>
      <td>{{ $p->no_induk }}</td>
      <td>{{ $p->nama }}</td>
      <td>{{ $p->no_tlp }}</td>
      <td>{{ $p->kelas }}</td>
      <td>{{ $p->email }}</td>
      <td>{{ $p->role }}</td>
      <td>
        <a href="/pendaftaran/detail/{{ $p->id }}" class="btn btn-success btn-sm">Detail</a>
        <a href="/pendaftaran/edit/{{ $p->id }}" class="btn btn-warning btn-sm">Edit</a>
        <a href="/pendaftaran/hapus/{{ $p->id }}" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection