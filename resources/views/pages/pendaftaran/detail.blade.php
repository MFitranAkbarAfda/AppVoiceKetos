@extends('layouts.master')

@section('title', 'Detail Pendaftaran')

@section('title_tb', 'Detail Pendaftaran')

@section('content')

<div class="col-md-6">

    <div class="card">
        <div class="card-header">
            <h1>Detail Pendaftaran</h1>
        </div>
        <div class="card-body">
            <div class="form-group">
                <p>NIP : {{ $data->no_induk }}</p>
            </div>

            <div class="form-group">
                <p>Nama : {{ $data->nama }}</p>
            </div>

            <div class="form-group">
                @if($data->jenkel == "P")
                    <p> Jenis Kelamin : Perempuan</p>
                @elseif($data->jenkel == "L")
                    <p> Jenis Kelamin : Laki - laki</p>
                @endif
            </div>

            <div class="form-group">
                <p>Telepon : {{ $data->no_tlp }}</p>
            </div>

            <div class="form-group">
                <p>Kelas : {{ $data->kelas }}</p>
            </div>

            <div class="form-group">
                <p>Email : {{ $data->email }}</p>
            </div>
            
            <div class="form-group">
                <p>Role : {{ $data->role }}</p>
            </div>

        
        </div>
    </div>

</div>

@endsection