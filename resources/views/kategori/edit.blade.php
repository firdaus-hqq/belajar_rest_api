@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Kategori Catatan</h2>
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

        <form action="{{ route('kategori.update', [$kategori->id]) }}" method="post" enctype="multipart/form-data">
            @method('put')
            {{ csrf_field() }}
            <div class="col-md-4 mx-auto">
                <div class="form-group mb-3">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="{{ old('nama_kategori', $kategori->nama_kategori) }}">
                </div>
                <div class="form-group row">
                    <div class="col">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    <div class="col">
                        <a href="/kategori" class="btn btn-primary float-end">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
