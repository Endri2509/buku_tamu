<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buku Tamu PBJ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid mt-3 text-center">
        <div class="row">
            <div class="container">
                <img src="{{ asset('image/udinus.png') }}" class="img-fluid float-center" alt="LOGO" style=" width: 150px;">
            </div>
        </div>
        <div class="row mt-3">
            <h4>SELAMAT DATANG DI PBJ</h4>
            <h4>SILAHKAN MENGISI BUKU TAMU</h4>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <form method="POST" action="{{ route('bukutamu.store') }}">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col mb-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" autocomplete="off" value="{{ old('nama') }}">
                    </div>
                    <div class="col mb-3">
                        <input type="text" class="form-control" name="no_hp" placeholder="No HP" autocomplete="off" value="{{ old('no_hp') }}">
                    </div>
                    <div class="col mb-3">
                        <input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off" value="{{ old('email') }}">
                    </div>
                    <div class="col mb-3">
                        <input type="text" class="form-control" name="instansi" placeholder="Instansi" autocomplete="off" value="{{ old('instansi') }}">
                    </div>
                    <div class="col mb-3">
                        <select class="form-select" name="layanan" autocomplete="off">
                            <option selected>Pilih Layanan</option>
                            <option value="1">ULP</option>
                            <option value="2">LPSE</option>
                            <option value="3">Advokasi</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
            <div class="col">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-info">A simple info list group item</li>
                    <li class="list-group-item list-group-item-info">A simple info list group item</li>
                    <li class="list-group-item list-group-item-info">A simple info list group item</li>
                    <li class="list-group-item list-group-item-info">A simple info list group item</li>
                    <li class="list-group-item list-group-item-info">A simple info list group item</li>
                    <li class="list-group-item list-group-item-info">A simple info list group item</li>
                    <li class="list-group-item list-group-item-info">A simple info list group item</li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Ada sesuatu yang salah"
                });
        </script>
    @endif
    @if ($message = Session::get('success'))
    <script>
        Swal.fire({
            position: "top-center",
            icon: "success",
            title: "Terimakasih, selamat berkunnjung",
            showConfirmButton: false,
            timer: 2000
            });
    </script>
    @endif
  </body>
</html>