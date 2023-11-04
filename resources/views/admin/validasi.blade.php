<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validasi</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
            background: linear-gradient(120deg, #3383FF, #000000);
            height: 100%;
            background-position: center;

            background-size: cover;

        }

        .topnav {
            overflow: hidden;
            background: linear-gradient(120deg, #3383FF, #000000);

        }

        .h5 {
            color: red;
            font-size: 30px;
            text-align:;
            padding: 100px 0 10px 0;
            text-shadow: 3px 2px 1px black;

        }

        .topnav a:hover {
            color: rgb(6, 6, 7);
            background-color: aliceblue;
        }

        .topnav a {
            float: left;
            display: block;
            color: rgb(255, 255, 255);
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            border-bottom: 3px solid transparent;
        }

        .topnav a:hover {
            border-bottom: 3px solid rgb(255, 255, 255);
        }

        .topnav a.active {
            border-bottom: 3px solid rgb(255, 255, 255);
        }

        .topnav-right {
            float: right;
        }

        table {
            border: solid 1px;
        }

        .button {
            background-color: rgb(11, 11, 11);
            color: black;
            border: 2px solid #ffff;
        }
    </style>
</head>

<body>
    <div class="topnav">
        <a href="{{url('halaman/admin')}}" class="active">Home</a>

        <a href="{{url('tanggapan')}}">Tanggapan</a>
        <a href="{{url('validasi')}}">Validasi</a>


        <div class="topnav-right">
            <a href="{{url('/')}}" class="button">Logout</a>
            </a>
        </div>

        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3>ㅤ</h3>
                <h3>ㅤ</h3>
                <h3>ㅤ</h3>
    
              <div class="container">
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="card shadow">
                          <div class="card" >
                              <h5 class="card-header headertabel">Validasi Laporan</h5>
                              <div class="card-body">
                                  {{-- <h5 class="card-title"></h5> --}}
                                  <table class=" table table-striped-columns">
                                      <thead>
                                          <th>ID</th>
                                          <th>NIK</th>
                                          <th>Tanggal</th>
                                          <th>Laporan</th>
                                          <th>Foto</th>
                                          <th>Status</th>
                                          <th>Aksi</th>
                                      </thead>
                                      <tbody>
                                        @foreach ($pengaduan as $wadul)
                                            <tr>
                                                <td>{{$wadul->id_pengaduan}}</td>
                                                <td>{{$wadul->nik}}</td>
                                                <td>{{$wadul->tgl_pengaduan}}</td>
                                                <td>{{$wadul->isi_laporan}}</td>
                                                <td>{{$wadul->foto}}</td>
                                                <td>{{$wadul->status}}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td>
                                            <div>
                                              <a href="" class="btn btn-primary" type="submit">Validasi</a>
                                            </div>
                                          </td>
                                        </tr>
                                   
                                      </tbody>
                                    </table></p>
                              </div>
                          </div>
                      </div>
                      </div>
                </div>
              </div>
            </div>
    </div>
    <div class="h5">
        <h2>ㅤ</h2>
        <h3>ㅤ</h3>
        <h3>ㅤ</h3>
        <h3>ㅤ</h3>
        <h3>ㅤ</h3>
        <h3>ㅤ</h3>
        <h3>ㅤ</h3>
    </div>
</body>

<script src="js\bootstrap.min.js"></script>

</html>
