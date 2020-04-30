<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->
@extends('layout/main')

@section('title', 'Detail Siswa')

@section('container')
<div class="row-3">
    <div class="col-5">
        <div class="mt-3" >
            <div class="card bg-light mb-3 card-inverse border-success">
                <div class="card-body">
                    <h5 class="card-title">{{ $student -> nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student -> nis }}</h6>
                    <p class="card-text">{{ $student -> asrama }}</p>


                    <a href="/scorestudents" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
