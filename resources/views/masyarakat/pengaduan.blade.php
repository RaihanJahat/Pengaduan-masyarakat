<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan</title>
    <style>
        body{
          margin: auto;
          font-family: "Lato", sans-serif;
          background: linear-gradient(120deg,#ff0000,#000000);
          height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
        }
        .topnav {
            overflow: hidden;
            background: linear-gradient(120deg, #ff0000, #000000);

        }

        .h5 {
            color: red;
            font-size: 30px;
            text-align: center;
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
            padding: 10px 16px;
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
        #main{
            margin-left: 100px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="topnav">
        <a href="{{url('halaman_utama/masyarakat')}}" class="active">Home</a>
        <a href="{{url('pengaduan')}}">Pengaduan</a>
        <a href="#"></a>
        <a href="#"></a>
        
      
        <div class="topnav-right">
    <a href="{{url('login1')}}" class="button">Logout</a>

        </a>
        </div>
        <div id="main" class="d-flex align-items-center vh-100">
                    <div class="container">
                            <div class="card shadow m-auto" style="width: 400px">
                                <div class="card-body">
                                    <h4 class="h4">Tulis Pengaduan Anda</h4>
                                    @if (session('pesan'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('pesan')}}
                                      </div>
                                    @endif
                                    @if ($errors->any())
                                    <div class="alert alert-success" role="alert">
                                        Anda gagal registrasi
                                      </div>
                                    @endif
                                        <form action="{{url('laporan')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="nik" class="form-label">NIK</label>
                                                <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
                                                @error('nik')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                <div class="mb-3">    
                                                <label for="tanggal_pengaduan" class="form-label">Tanggal Pengaduan</label>
                                                <input type="date" class="form-control" name="tanggal_pengaduan" id="nama" placeholder="tanggal_pengaduan">
                                                @error('tanggal_pengaduan')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                </div>
                                                <div class="mb-3">    
                                                    <label for="formFile" class="form-label">Foto</label>
                                                    <input class="form-control" type="file" name="foto" id="formFile">
                                                @error('foto')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                                <div class="mb-3">    
                                                    <label for="isi_laporan" class="form-label">Isi Pengaduan</label>
                                                    <textarea class="form-control" name="isi_laporan" id="isi_laporan" rows="3" ></textarea>
                                                @error('isi_laporan')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                </div>
                                                <button class="btn form-control btn-primary mb-2">Lapor</button>
                                                <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                                        </form>    
                                </div>    
                            </div>    
                    </div>   
        </div>    
</body>
</html>