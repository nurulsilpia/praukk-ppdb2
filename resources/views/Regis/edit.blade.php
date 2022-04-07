@extends('layouts.main')
@section('container')
    
<div class="container mb-5" style="margin-top: 100px;">
    <h1 class="text-center mb-3">Edit Data Peserta Didik <span class="text-primary">{{$regi->nama}}</span></h1>
    <form action="/regis/{{$regi->id}}" method="post" class="mx-3 mb-3 card shadow-sm p-3">
        @method('put')
        @csrf
        <div class="d-flex">
            <div class="col-md-6">
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomor Registrasi</label>
                    <input type="text" class="form-control" value="{{$regi->noReg}}" name="noReg" aria-describedby="noReg">
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control" value="{{$regi->nama}}" name="nama" aria-describedby="nama">
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jk" class="jk" aria-label="Default select example">
                        <option selected disabled>Jenis Kelamin</option>
                        <option value="Perempuan" <?php if($regi->jk == 'Perempuan'){ echo 'selected';}?>>Perempuan</option>
                        <option value="Laki-laki" <?php if($regi->jk == 'Laki-laki'){ echo 'selected';}?>>Laki-laki</option>
                    </select>
                </div>
                
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Agama</label>
                    <input type="text" class="form-control" value="{{$regi->agama}}" name="agama" aria-describedby="agama">
                </div>
            </div>
            <div class="mr-3 col-md-6">
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Asal SMP</label>
                    <input type="text" class="form-control" value="{{$regi->asal}}" name="asal" aria-describedby="asal">
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                    <select class="form-select" name="jurusan" class="jurusan" aria-label="Default select example">
                        <option selected disabled>Jurusan</option>
                        <option value="Rekayasa Perangkat Lunak" <?php if($regi->jurusan == 'Rekayasa Perangkat Lunak'){ echo 'selected';}?>>Rekayasa Perangkat Lunak</option>
                        <option value="Multimedia" <?php if($regi->jurusan == 'Multimedia'){ echo 'selected';}?>>Multimedia</option>
                        <option value="Teknik Komputer dan Jaringan" <?php if($regi->jurusan == 'Teknik Komputer dan Jaringan'){ echo 'selected';}?>>Teknik Komputer dan Jaringan</option>
                        <option value="Otomatisasi Tata Kelola Perkantoran" <?php if($regi->jurusan == 'Otomatisasi Tata Kelola Perkantoran'){ echo 'selected';}?>>Otomatisasi Tata Kelola Perkantoran</option>
                        <option value="Bisnis Daring Pemasaran" <?php if($regi->jurusan == 'Bisnis Daring Pemasaran'){ echo 'selected';}?>>Bisnis Daring Pemasaran</option>
                        <option value="Perhotelan" <?php if($regi->jurusan == 'Perhotelan'){ echo 'selected';}?>>Perhotelan</option>
                        <option value="Tata Boga" <?php if($regi->jurusan == 'Tata Boga'){ echo 'selected';}?>>Tata Boga</option>
                    </select>
                </div>
                <div class="mx-3 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="textarea" class="form-control" value="{{$regi->alamat}}" name="alamat" aria-describedby="alamat" style="height: 124px;">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary m-3">Update</button>
    </form>
</div>

@endsection
