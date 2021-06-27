@extends('layouts.admin-staff-payroll')

 @section('content')
    
<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">JABATAN</h1>
            <a href="{{ route('jabatan.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-80"> Tambah Jabatan</i></a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead >
                            <tr>
                                <th>Id Jabatan</th>
                                <th>Nama Jabatan</th>
                                <th>Gaji Pokok</th>
                                <th>Tunjangan</th>
                                <th>Action</th>
                            </tr>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id_jabatan}}</td>
                                    <td>{{ $item->nama_jabatan }}</td>
                                    <td>Rp. {{ $item->gaji_pokok}}</td>
                                    <td>Rp. {{ $item->tunjangan }}</td>
                                    <td>
                                        <a href="{{ route('jabatan.edit', $item->id_jabatan) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('jabatan.destroy', $item->id_jabatan) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus?')"  >
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

