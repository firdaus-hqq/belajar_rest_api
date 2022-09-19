@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Data Kategori Catatan</h2>

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif

        <div class="row">
            <div class="col-sm">
                <a href="kategori/create" class="btn btn-primary">
                    Tambah Data
                </a>
            </div>
            <div class="col-sm">
                <a href="#">Catatan</a>
            </div>
            <div class="col-sm">
                {{ $data_kategori->links() }}
            </div>
        </div>

        <br>

        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-md-1">ID</th>
                    <th>Nama</th>
                    <th class="col-md-2" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_kategori as $kategori)
                    <tr>
                        <td>{{ $kategori->id }}</td>
                        <td>{{ $kategori->nama_kategori }}</td>
                        <td>
                            <a href="/kategori/{{ $kategori->id }}/edit" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('kategori.destroy', [$kategori->id]) }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">

                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
