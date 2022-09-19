@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Membuat Kategori Baru</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>
                    {{ \Session::get('success') }}
                </p>
            </div>
        @endif

        <form action="/kategori" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-md-4 mx-auto">
                <div class="form-group mb-3">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="{{ old('nama_kategori') }}">
                </div>
                <div class="form-group row">
                    <div class="col">
                        <button type="submit" class="btn btn-success">Tambah Data</button>
                    </div>
                    <div class="col">
                        <a href="/kategori" class="btn btn-primary float-end">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
