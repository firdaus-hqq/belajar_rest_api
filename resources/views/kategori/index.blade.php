@extends('layout.app')

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
                <a href="#" class="btn btn-primary">
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
                    <th>ID</th>
                    <th>Nama</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection
