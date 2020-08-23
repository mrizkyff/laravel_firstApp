@extends('template.layout')

@section('konten')
    <h1 class="text-center">Detail Mahasiswa</h1>
    <div class="col-6">

        <div class="card">
            <div class="card-body">
            <h5 class="card-title">{{$student->nama}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
                <p class="card-text">{{$student->email}}</p>
                <p class="card-text">{{$student->jurusan}}</p>
                
                <a href="/student/{{$student->id}}/edit" class="btn btn-primary">Edit</a>
                <form action="/student/{{$student->id}}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/student">Kembali</a>
            </div>
        </div>
    </div>
@endsection