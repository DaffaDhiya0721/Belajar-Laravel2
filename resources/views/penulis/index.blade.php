@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col mb-8">
                <div class="card">
                    <div class="card-header">Data Penulis
                    <a href="{{route('penulis.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-boarded" id="datatable">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Penulis</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <body>
                                @php $no = 1; @endphp
                            @foreach ($penulis as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nama_penulis}}</td>
                                <td>
                                    <form action="{{route('penulis.destroy',$item->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{route('penulis.edit', $item->id)}}" class="btn btn-sm btn-success">Edit</a>
                                    <a href="{{route('penulis.show', $item->id)}}" class="btn btn-sm btn-warning">Show</a>
                                    
                                    <button class="btn btn-sm btn-danger" type="submit"
                                        onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')">Delete
                                    </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </body>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection