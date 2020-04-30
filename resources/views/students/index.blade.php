<!-- Using Templating Engine Blade Laravel -->
<!-- Import from resources/views/layout/main.blade.php -->
@extends('layout/main')

@section('title', 'Biodata Siswa')

@section('container')
<div class="container">
        <div class=table-responsive>
            <h1 class="mt-2"> Biodata Siswa</h1>

            <a href="/students/create" class="btn btn-primary" my-4>Tambah Data Siswa</a>
            <div class="my-3">

            <!-- Alert Notification (status from StudentsController) -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            </div>
            <break>

            <table class="table" >
                <thead class="bg-info">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Asrama</th>
                        <th scope="col">Cek Detil</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <th scope="row">{{ $loop -> iteration }}</th>
                            <td>{{ $student -> nama}}</td>
                            <td>{{ $student -> nis}}</td>
                            <td>{{ $student -> asrama}}</td>
                            <td>
                                <a href="/students/{{ $student->id }}" class="badge badge-info">Cek Detil</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
        </div>
</div>

@endsection
