@extends('template.layout')

@section('konten')
    <h1 class="text-center">Daftar Mahasiswa</h1>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($mahasiswa as $mhs)    
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$mhs->nama}}</td>
                <td>{{$mhs->nim}}</td>
                <td><?= $mhs->jurusan ?></td>
                <td>
                  <a href="#" class="badge badge-success">Edit</a>
                  <a href="#" class="badge badge-danger">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection