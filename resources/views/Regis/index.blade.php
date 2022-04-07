@extends('layouts.main')
@section('container')
    
<div class="container mb-5" style="margin-top: 100px;">
    {{-- Validate --}}
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('danger') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    {{--  --}}

    <h1 class="text-center mb-3">Formulir Pendaftaran Peserta Didik</h1>
    <form action="/regis" method="post" class="mx-3 mb-5 card shadow-sm p-3">
        {{-- <h1 class="mx-3">Form Pendaftaran</h1> --}}
        @csrf
        <div class="d-flex mt-3">
            <div class="col-md-6">
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomor Registrasi</label>
                    <input type="text" class="form-control" name="noReg" aria-describedby="noReg" required>
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" aria-describedby="nama" required>
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jk" class="jk" aria-label="Default select example" required>
                        <option selected disabled>--Pilih Jenis Kelamin--</option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki-laki">Laki-laki</option>
                    </select>
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Agama</label>
                    <input type="text" class="form-control" name="agama" aria-describedby="agama" required>
                </div>
            </div>
            <div class="mr-3 col-md-6">
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Asal SMP</label>
                    <input type="text" class="form-control" name="asal" aria-describedby="asal" required>
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                    <select class="form-select" name="jurusan" class="jurusan" aria-label="Default select example" required>
                        <option selected disabled>--Pilih Jurusan--</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                        <option value="Otomatisasi Tata Kelola Perkantoran">Otomatisasi Tata Kelola Perkantoran</option>
                        <option value="Bisnis Daring Pemasaran">Bisnis Daring Pemasaran</option>
                        <option value="Perhotelan">Perhotelan</option>
                        <option value="Tata Boga">Tata Boga</option>
                    </select>
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" style="height: 124px;" name="alamat" ></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary m-3">Submit</button>
      </form>

    <table class="table table-light" id="tableAll">
        <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">No. Reg</th>
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
                    <td>{{ $regi->noReg }}</td>
                    <td>{{ $regi->nama }}</td>
                    <td>{{ $regi->jk }}</td>
                    <td>{{ $regi->alamat }}</td>
                    <td>{{ $regi->agama }}</td>
                    <td>{{ $regi->asal }}</td>
                    <td>{{ $regi->jurusan }}</td>
                    <td class="d-flex">
                        <a href="/regis/{{$regi->id}}/edit" class="btn btn-sm btn-md btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                        <a href="/regis/{{$regi->id}}" class="btn btn-sm btn-secondary ms-2"><i class="bi bi-printer"></i> Cetak</a>
                        <form action="/regis/{{$regi->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="ms-2 btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>
</div>
@endsection
