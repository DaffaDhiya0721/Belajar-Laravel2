@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row">
        @foreach ($artikel as $artikels )
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ $artikels->foto }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $artikels->judul }}</h5>
                    <p class="card-text">{{ $artikels->kategori }}</p>
                    <p><a href="artikel/{{$artikels->id}}">Link</a></p>
                </div>
              </div>
        </div>
        @endforeach
        <h3><center><div class="alert alert-info" role="alert">Kategori</div></center></h3>
    </div>
</div>
<div class=" col-4 mx-auto">
  <a href="/artikel/kategori/Olahraga"><button class="btn btn-primary" type="button">Olahraga</button></a>
  <a href="/artikel/kategori/Pemandangan"><button class="btn btn-warning" type="button">Pemandangan</button></a>
  <a href="/artikel/kategori/Kesehatan"><button class="btn btn-success" type="button">Kesehatan</button></a>
</div>
@endsection