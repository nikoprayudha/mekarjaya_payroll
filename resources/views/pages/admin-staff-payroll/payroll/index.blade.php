@extends('layouts.admin-staff-payroll')

 @section('content')
    
<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">PAYROLL</h1>
            <a href="" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-80"> Tambah Payroll</i></a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id Karyawan</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Divisi</th>
                                <th>Jabatan</th>
                                <th>Tgl Masuk</th>
                                <th>Action</th>
                            </tr>
                            <tbody>
                                
                        </thead>
                    </table>
                </div>
            </div>
        </div>
     
        
    </div>
    <!-- /.container-fluid -->

@endsection

