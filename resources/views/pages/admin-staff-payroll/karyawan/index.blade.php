@extends('layouts.admin-staff-payroll')

 @section('content')
    
<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">KARYAWAN</h1>
            <a href="{{ route('karyawan.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-80"> Tambah Karyawan</i></a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id Karyawan</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Divisi</th>
                                <th>Jabatan</th>
                                <th>Tgl Masuk</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id_karyawan}}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->tgl_lahir }}</td>
                                    <td>{{ $item->jenis_kelamin}}</td>
                                    <td>{{ $item->nama_divisi }}</td>
                                    <td>{{ $item->nama_jabatan }}</td>
                                    <td>{{ $item->tgl_masuk }}</td>
                                    <td>
                                        <img src="{{ Storage::url($item->foto) }}" alt="" style="width:450px; height:100px" class="img-thumbnail">
                                    </td>
                                    <td>
                                        <a href="{{ route('karyawan.edit', $item->id_karyawan) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt fa-xs"></i>
                                        </a>
                                        
                                        <form action="{{ route('karyawan.destroy', $item->id_karyawan) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger .btn-sm" onclick="return confirm('Apakah Anda Ingin Menghapus?')"  >
                                                <i class="fa fa-trash fa-xs"></i>
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

