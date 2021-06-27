@extends('layouts.admin-staff-payroll')

 @section('content')
    
    
<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Absensi</h1>
        </div>


          {{-- cek error --}}
          @if($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
           @endif

            <div class="card shadow">
                <div class="card-body">
                 
                    <form action="{{ route('absensi.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="id_karyawan">Nama Karyawan</label>
                            <select name="id_karyawan" required class="form-control">
                                <option value="" > -- Pilih Karyawan --</option>
                                @foreach ($karyawan as $item1)
                                        <option value="{{ $item1->id_karyawan}}">
                                            {{ $item1->nama }}
                                        </option>                                    
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jml_kerja">Jumlah Hari Kerja</label>
                            <input type="number" class="form-control" name="jml_kerja" placeholder="Jumlah Kerja" 
                            value="{{ old('jml_kerja')}}">
                        </div>

                        <div class="form-group">
                            <label for="jml_sakit">Jumlah Hari Sakit</label>
                            <input type="number" class="form-control" name="jml_sakit" placeholder="Jumlah Sakit" 
                            value="{{ old('jml_sakit')}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="jml_izin">Jumlah Hari Izin</label>
                            <input type="number" class="form-control" name="jml_izin" placeholder="Jumlah Izin" 
                            value="{{ old('jml_izin')}}">
                        </div>

                        <div class="form-group">
                            <label for="jml_alfa">Jumlah Hari Alfa</label>
                            <input type="number" class="form-control" name="jml_alfa" placeholder="Jumlah Alfa" 
                            value="{{ old('jml_alfa')}}">
                        </div>

                        <div class="form-group">
                            <label for="jml_cuti">Jumlah Hari Cuti</label>
                            <input type="number" class="form-control" name="jml_cuti" placeholder="Jumlah Cuti" 
                            value="{{ old('jml_cuti')}}">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" >
                            Simpan
                        </button>
                        
                     </form>
                        
                </div>
            </div>  
            
        
    </div>
    <!-- /.container-fluid -->

@endsection

