<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
<style>
body{
    background: linear-gradient(120deg,#3383FF,#000000);
}

</style>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    
    <div id="main" class="d-flax align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto mt-5" style="width: 400px">
                <div class="card-body">
                    <h4 class="h4">Daftarkan Diri Anda</h4>
                    @if (session('Pesan'))
                        <div class="alert alert-success" role="alert">

                            {{ session('Pesan') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">

                            Gagal Coy
                        </div>
                    @endif

                    <form action="{{ url('registrasi2') }}" method="POST">
                        @csrf
                        <div class="mb-3">

                            <label for="id_petugas" class="form-label">ID Admin</label>
                            <input type="number" class="form-control" name="id_petugas" id="id_petugas" placeholder="ID Admin">

                            @error('id_admin')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label for="Nama_petugas" class="form-label">Nama Admin</label>
                            <input type="text" class="form-control" name="Nama_petugas" id="Nama_petugas"
                                placeholder="Nama Admin">

                            @error('Nama_petugas')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label for="Username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="Username" id="Username"
                                placeholder="Usename">

                            @error('Username')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label for="Password" class="form-label">Password</label>
                            <input type="Password" class="form-control" name="Password" id="Password"
                                placeholder="Password">

                            @error('Password')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="Telp" class="form-label">Telp</label>
                            <input type="number" class="form-control" name="Telp" id="Telp"
                                placeholder="Telp">

                            @error('Telp')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            
                        </div>
                        <div class="col-12 pt-4 text-center">
                            <p class="small mb-0">
                                Sudah Punya Akun? <a href="{{url('login2')}}">Login Ayena</a>
                                    </p>
                        </div>
                        <button class="btn form-control btn-primary mb-2">Registrasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
