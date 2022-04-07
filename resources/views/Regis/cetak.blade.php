<!DOCTYPE html>
<html>
    <head>
        <title>Download Data Siswa</title>
            <style>
                body{
                    font-family: sans-serif;
                }
                table{
                    margin: 20px auto;
                    padding: 20px;
                    border-collapse: collapse;
                    box-shadow: 0 .125rem .25rem rgba(black, .075);
                }
                .tengah{
                    text-align: center;
                }
                div.card {
                    max-width: 700px;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                }
                div.container {
                    margin: 20px auto;
                    padding: 10px;
                }
            </style>
    </head>
    <body>
        <center>
            <div class="card">
                <div class="container">
                    <table>
                        <h2 class="tengah">Download Data Peserta Didik {{$regi->nama}}</h2>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td>{{$regi->nama}}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{$regi->jk}}</td>
                            </tr>
                            <tr>
                                <td>Alamat Lengkap</td>
                                <td>:</td>
                                <td>{{$regi->alamat}}</td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>:</td>
                                <td>{{$regi->agama}}</td>
                            </tr>
                            <tr>
                                <td>Jurusan</td>
                                <td>:</td>
                                <td>{{$regi->jurusan}}</td>
                            </tr>
                    </table>
                </div>
            </div>
        </center>
        <script>
            window.print();
        </script>
    </body>
</html>