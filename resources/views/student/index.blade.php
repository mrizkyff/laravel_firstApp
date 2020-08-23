@extends('template.layout')

@section('konten')
    <h1 class="text-center">Daftar Student</h1>

    
    <center>
        <a href="/student/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
        <div class="col-6">
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
            <div class="container">
                <ul class="list-group">
                    @foreach ($students as $student)    
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{$student->nama}}
                        <a href="/student/{{ $student->id }}" class="badge badge-info">Detail</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </center>
@endsection