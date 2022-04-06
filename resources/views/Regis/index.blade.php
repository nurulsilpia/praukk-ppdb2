@extends('layouts.main')
@section('container')
    
<div class="container" style="margin-top: 100px;">
    <h1 class="text-center mb-3">Form Formulir Pendaftaran Peserta Didik</h1>
    <form action="/regis" method="post" class="mx-3 mb-5 card shadow-sm p-3">
        {{-- <h1 class="mx-3">Form Pendaftaran</h1> --}}
        @csrf
        <div class="d-flex mt-3">
            <div class="col-md-6">
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" aria-describedby="nama">
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jk" class="jk" aria-label="Default select example">
                        <option selected disabled>--Pilih Jenis Kelamin--</option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki-laki">Laki-laki</option>
                    </select>
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" aria-describedby="alamat">
                </div>
            </div>
            <div class="mr-3 col-md-6">
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Agama</label>
                    <input type="text" class="form-control" name="agama" aria-describedby="agama">
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Asal SMP</label>
                    <input type="text" class="form-control" name="asal" aria-describedby="asal">
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                    <select class="form-select" name="jurusan" class="jurusan" aria-label="Default select example">
                        <option selected disabled>--Pilih Jurusan--</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary m-3">Submit</button>
      </form>

    <table class="table table-light" id="tableAll">
        <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">JK</th>
              <th scope="col">Alamat</th>
              <th scope="col">Agama</th>
              <th scope="col">Asal SMP</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($regiss as $index => $regi)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $regi->nama }}</td>
                    <td>{{ $regi->jk }}</td>
                    <td>{{ $regi->alamat }}</td>
                    <td>{{ $regi->agama }}</td>
                    <td>{{ $regi->asal }}</td>
                    <td>{{ $regi->jurusan }}</td>
                    <td class="d-flex">
                        <a href="/regis/{{$regi->id}}/edit" class="btn btn-md btn-primary">Edit</a>
                        <a href="/regis/{{$regi->id}}" class="btn btn-secondary ms-2">Cetak</a>
                        <form action="/regis/{{$regi->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="ms-2 btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>
</div>
@endsection
