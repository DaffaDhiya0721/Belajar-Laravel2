@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <img src="{{ $artikel->foto }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{ $artikel->judul }}</p>
                    <p>Keterangan: <b>{{ $artikel->konten }}</b>View</p>
                    <p>Kategori: {{ $artikel->kategori }}</p>
                    <p>Penulis: {{ $artikel->penulis }}</p>
                    
            </div>
        </div>
    </div>
</div>
@endsection