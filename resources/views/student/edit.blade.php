@extends('template.layout')

@section('konten')
    <h1 class="text-center">Edit Data Student</h1>

    
    <div class="col-8">
            <form method="POST" action="/student/{{$student->id}}">
                @method('patch')
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" value="{{$student->nama}}">
                </div>
                <div class="form-group">
                  <label for="nim">NIM</label>
                  <input type="text" class="form-control" id="nim" placeholder="Masukkan nim" name="nim" value="{{$student->nim}}">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="Masukkan email" value="{{$student->email}}">
                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan" value="{{$student->jurusan}}">
                </div>
                <button class="btn btn-primary" type="submit">Edit Data</button>
              </form>
           
        </div>
@endsection