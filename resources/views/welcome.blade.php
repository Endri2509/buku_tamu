@extends('templates.main')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Hasil Kunjungan Buku Tamu</h1>
    {{-- Logo, Text Top Center --}}
    {{-- <div class="container-fluid text-center">
        <div class="row">
            <img src="..." class="img-fluid rounded float-start" alt="LOGO">
        </div>
        <div class="row">
            <h4>SELAMAT DATANG DI PBJ</h4>
            <h4>SILAHKAN MENGISI BUKU TAMU</h4>
        </div>
    </div> --}}

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Instansi</th>
                        <th>Layanan</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($bukutamu as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $item->created_at  }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->instansi }}</td>
                            <td>{{ $item->nama_layanan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    {{-- Form Buku Tamu --}}
    {{-- <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <form>
                    <div class="col mb-2">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="col mb-2">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="col mb-2">
                        <label class="form-label">No. HP</label>
                        <input type="text" class="form-control" name="no_hp">
                    </div>
                    <div class="col mb-2">
                        <label class="form-label">Instansi</label>
                        <input type="text" class="form-control" name="instansi">
                    </div>
                    <div class="col mb-2">
                        <select class="form-select">
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
                </ul>
            </div>
        </div>
    </div> --}}

    {{-- Menu Category --}}
    {{-- <div class="container text-center mt-3">
        <h4>SILAHKAN MEMILIH LAYANAN</h4>
        <div class="row justify-content-ceenter">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">ULP</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-black-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">LPSE</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-black-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">ADVOKASI</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-black-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}} 

@endsection