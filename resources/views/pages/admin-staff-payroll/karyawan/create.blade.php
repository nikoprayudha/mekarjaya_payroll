@extends('layouts.admin-staff-payroll')

 @section('content')
    
    
<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Karyawan</h1>
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
                 
                    <form action="{{ route('karyawan.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Karyawan</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Karyawan" 
                            value="{{ old('nama')}}">
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir">Tgl Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" placeholder=" " 
                            value="{{ old('tgl_lahir')}}">
                        </div>

                        <div class="form-group">
                            <label for="Jenis Kelamin">Jenis Kelamin</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="jenis_kelamin"                                  
                                  value="laki-laki"
                                />
                                <label class="form-check-label" >Laki-Laki</label>
                              </div>                              
                              <div class="form-check form-check-inline">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="jenis_kelamin"                                
                                  value="perempuan"
                                />
                                <label class="form-check-label" >Perempuan</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <label for="id_divisi">Nama Divisi</label>
                            <select name="id_divisi" required class="form-control">
                                <option value="" > -- Pilih Divisi --</option>
                                @foreach ($divisi as $item1)
                                        <option value="{{ $item1->id_divisi}}">
                                            {{ $item1->nama_divisi }}
                                        </option>                                    
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_jabatan">Nama Jabatan</label>
                            <select name="id_jabatan" required class="form-control">
                                <option value="" > -- Pilih Jabatan --</option>
                                @foreach ($jabatan as $item2)
                                        <option value="{{ $item2->id_jabatan}}">
                                            {{ $item2->nama_jabatan }}
                                        </option>                                    
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tgl_masuk">Tgl Masuk</label>
                            <input type="date" class="form-control" name="tgl_masuk" placeholder=" " 
                            value="{{ old('tgl_masuk')}}">
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" name="foto" placeholder="Foto">
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

