@extends('layouts.master')

@section('title', 'Candidate')

@section('title_tb', 'Candidate')

@section('content')


<a href="/candidate/create" class="btn btn-primary btn-sm mb-3">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kategori</th>
      <th scope="col">Kelas</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Foto</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($candidate as $c)
      <th scope="p">{{ $no++ }}</th>
      <td>{{ $c->nm_candidate }}</td>
      <td>{{ $c->Kategori->nm_kategori }}</td>
      <td>{{ $c->kelas }}</td>
      <td>{{ $c->jenkel }}</td>
      <td><img src="{{ url('/assets/image/foto_candidate/'. $c->foto) }}" style="width:100px" alt=""></td>
      <td>
        <a href="/pendaftaran/detail/{{ $c->id }}" class="btn btn-success btn-sm">Detail</a>
        <a href="/candidate/edit/{{ $c->id_candidate }}" class="btn btn-warning btn-sm">Edit</a>
        <a href="/pendaftaran/hapus/{{ $c->id }}" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection