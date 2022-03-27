<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB</title>
    {{-- CSS BOOSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
    <h1 class="text-center mb-3">Form Formulir Pendaftaran Peserta Didik</h1>

    <table class="table table-light">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">nama</th>
              <th scope="col">jk</th>
              <th scope="col">alamat</th>
              <th scope="col">agama</th>
              <th scope="col">asal</th>
              <th scope="col">jurusan</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($regiss as $index => $regi)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $regi->nama }}</td>
                    <td>{{ $regi->jk }}</td>
                    <td>{{ $regi->alamat }}</td>
                    <td>{{ $regi->agama }}</td>
                    <td>{{ $regi->asal }}</td>
                    <td>{{ $regi->jurusan }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

{{-- BOOSTRAP JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
