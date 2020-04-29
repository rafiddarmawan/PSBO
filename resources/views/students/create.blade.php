<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->
@extends('layout/main')

@section('title', 'Form Tambah Data Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8" >
            <div class="mt-3">
                <h1 class="mt-3">Form Tambah Data Siswa</h1>
                <form method="post" action="/students">

                    <!-- Token Cross Site Research Forgery (security form Laravel-->
                    @csrf

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('nama'))
                                <div class="error">{{ $errors->first('nama') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="nama">NIS</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan NIS" name="nis" value="{{old('nis')}}">

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia)
                        (3) Jika input nis sudah ada, akan terjadi error -->
                        @if($errors->has('nis'))
                                <div class="error">{{ $errors->first('nis') }}</div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="nama">Asrama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Asrama" name="asrama" value="{{old('asrama')}}">

                        <!-- Test Validasi (masih terdapat kekurangan
                        (1) Tidak memunculkan kolom/penanda merah error
                        (2) Nama validasi tidak bisa diubah menjadi bahasa indonesia) -->
                        @if($errors->has('asrama'))
                                <div class="error">{{ $errors->first('asrama') }}</div>
                        @endif

                    </div>

                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
