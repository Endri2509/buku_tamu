<!doctype html>
<html lang="en">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+gpfOp6qL6QsGr5WBE/cMv1zjzEFeF5ZFPqTKs6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha384-9aS5ze3TPFy5n8ixVf/6L6rZJg49VcPaO/lQSmv5qcGJyEz9n72o6KK2I6HupHgk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jQuery-Keyboard/dist/js/jquery.keyboard.min.js"></script>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title style>Buku Tamu PBJ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="bg-info p-3">
    <div class="container-fluid mt-3 text-center">
        <div class="row">
            <div class="container">
                <img src="{{ asset('image/logo.jpg') }}" class="img-fluid float-center" alt="LOGO" style=" width: 150px;">
            </div>
        </div>
        <div class="row mt-3">
            <h4 style="font-family:'Copperplate'">SELAMAT DATANG DI PBJ</h4>
            <h4 style="font-family:'Courier New'">SILAHKAN MENGISI BUKU TAMU</h4>
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
                        <input type="text" class="form-control" name="instansi" placeholder="Instansi/Penyedia" autocomplete="off" value="{{ old('instansi') }}">
                    </div>
                    {{-- <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">ULP</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Pengajuan Tender</a></li>
                            <li><a class="dropdown-item" href="#">Konsultasi Jenis dan Metode Pengadaan</a></li>
                            <li><a class="dropdown-item" href="#">Lain-Lain</a></li>
                        </ul>
                    </div> --}}
                    {{-- <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">LPSE</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Verifikasi Berkas Penyedia</a></li>
                            <li><a class="dropdown-item" href="#">Permohonan Akun PP/PPK</a></li>
                            <li><a class="dropdown-item" href="#">Konsultasi RUP</a></li>
                            <li><a class="dropdown-item" href="#">Konsultasi PDN</a></li>
                            <li><a class="dropdown-item" href="#">Konsultasi E-Katalog</a></li>
                            <li><a class="dropdown-item" href="#">Lain-Lain</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">ADVOKASI</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Konsultasi Terkait Permasalahan Pengadaan Barang dan Jasa</a></li>
                        </ul>
                    </div> --}}
                    <div class="col mb-3">
                        <select class="form-select" id="layanan" name="layanan">
                            <option value="" disabled selected style="color: black;">Pilih Layanan</option>
                            <option value="1">ULP</option>
                            <option value="2">LPSE</option>
                            <option value="3">Advokasi</option>
                        </select>
                    </div>
                    <div class="col" id="subLayanan" style="display:none">
                        <p style="color: black">Pilih Sub Layanan *</p>
                        <select id="subOpsi" name="jenis_layanan" class="form-control">
                            <!-- Sub-pilihan untuk Opsi 1 -->
                            <optgroup id="subOpsi1" label="Silahkan Pilih">
                                <option value="1">Pengajuan Tender</option>
                                <option value="2">Konsultasi Jenis dan Metode Pengadaan</option>
                                <option value="3">Lain-Lain</option>
                            </optgroup>
                            <!-- Sub-pilihan untuk Opsi 2 -->
                            <optgroup id="subOpsi2" label="Silahkan Pilih">
                                <option value="4">Verifikasi Berkas Penyedia</option>
                                <option value="5">Permohonan Akun PP/PPK</option>
                                <option value="6">Konsultasi RUP</option>
                                <option value="7">Konsultasi PDN</option>
                                <option value="8">Konsultasi E-Katalog</option>
                                <option value="9">Lain-Lain</option>
                            </optgroup>
                            <!-- Sub-pilihan untuk Opsi 3 -->
                            <optgroup id="subOpsi3" label="Silahkan Pilih">
                              <option value="10">Konsultasi Terkait Permasalahan Pengadaan Barang dan Jasa</option>
                            </optgroup>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('template/js/pilihan.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/jQuery-Keyboard/dist/css/keyboard-dark.min.css" rel="stylesheet">

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
            title: "Terimakasih, selamat berkunjung",
            showConfirmButton: false,
            timer: 2000
            });
    </script>
    @endif
  </body>
</div>
<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PBJ 2024</span>
                    </div>
                </div>
            </footer>
</html>