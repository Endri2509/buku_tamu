@extends('templates.main')

@section('content')
    <!-- Page Heading -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-4 text-gray-800">Buku Tamu</h1>
            </div>
            <div class="col text-center">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Layanan
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('bukutamu.ulp') }}">ULP</a></li>
                      <li><a class="dropdown-item" href="{{ route('bukutamu.lpse') }}">LPSE</a></li>
                      <li><a class="dropdown-item" href="{{ route('bukutamu.advokasi') }}">ADVOKASI</a></li>
                    </ul>
                </div>
            </div>
            <div class="col text-center">
                <a href="{{ route('bukutamu.printPDF') }}" class="btn btn-danger" target="blank">Cetak</a>
            </div>
        </div>
    </div>
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
                        <th>Email</th>
                        <th>Instansi</th>
                        <th>Layanan</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($bukutamu as $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ date( 'd-M-Y H:i:s',strtotime($item->created_at))  }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->instansi }}</td>
                            <td>{{ $item->nama_layanan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection