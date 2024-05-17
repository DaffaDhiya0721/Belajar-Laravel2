@extends('layout.layout')
@section('content')
<center>
    <div class="container">
        <div class="row">
            @foreach ($artikel as $artikels)
            <div class="col mb-5">
                <div class="card mt-5" id="card">
                    <div class="card-header" id="card-header">
                        <img src="{{ $artikels->foto }}"  height="200px" alt="...">
                    </div>
                    <div class="card-body" id="card-body">
                        <h5 class="card-title">{{ $artikels->judul }}</h5>
                        <p class="card-text">Kategori: {{ $artikels->kategori }}</p>
                        <p class="card-text">{{ $artikels->konten }}</p>
                        <p class="card-text">Penulis: {{ $artikels->penulis }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</center> 
@endsection