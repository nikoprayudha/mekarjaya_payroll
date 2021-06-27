@extends('layouts.admin-staff-payroll')

 @section('content')
    
<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">ABSENSI</h1>
            <a href="{{ route('absensi.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-80"> Tambah Absensi</i></a>
        </div>

        
        <a href="{{ route('generate-pdf') }}" class="btn btn-sm btn-success shadow-sm">
            <i class="fas fa-print fa-sm text-white-80"> Cetak PDF</i></a>
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                           
                        <thead>
                            <tr>
                                <th>Id Absensi</th>
                                <th>Nama Karyawan</th>
                                <th>Jml Kerja</th>
                                <th>Jml Sakit</th>
                                <th>Jml Izin</th>
                                <th>Jml Alfa</th>
                                <th>Jml Cuti</th>
                                <th>Action</th>
                            </tr>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id_absensi}}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jml_kerja }}</td>
                                    <td>{{ $item->jml_sakit }}</td>
                                    <td>{{ $item->jml_izin }}</td>
                                    <td>{{ $item->jml_alfa }}</td>
                                    <td>{{ $item->jml_cuti }}</td>
                                    <td>
                                        <form action="{{ route('absensi.destroy', $item->id_absensi) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger .btn-sm" onclick="return confirm('Apakah Anda Ingin Menghapus?')"  >
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7">
                                        Data Kosong
                                    </td>
                                </tr>
                                @endforelse
                        </thead>
                    </table>
                </div>
            </div>
        </div>
     
        
    </div>
    <!-- /.container-fluid -->

@endsection

