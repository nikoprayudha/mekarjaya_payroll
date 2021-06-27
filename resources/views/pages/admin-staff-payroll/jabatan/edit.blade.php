@extends('layouts.admin-staff-payroll')

 @section('content')
    
<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Jabatan</h1>
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
                 
                    <form action="{{ route('jabatan.update', $item->id_jabatan )}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="nama_jabatan">Nama Jabatan</label>
                            <input type="text" class="form-control" name="nama_jabatan" placeholder="Nama Jabatan" 
                            value="{{ $item->nama_jabatan }}">
                        </div>

                        <div class="form-group">
                            <label for="gaji_pokok">Gaji Pokok</label>
                            <input type="bumber" class="form-control" name="gaji_pokok" placeholder="Pilih Format Number" 
                            value="{{ $item->gaji_pokok }}">
                        </div>

                        <div class="form-group">
                            <label for="tunjangan">Tunjangan</label>
                            <input type="bumber" class="form-control" name="tunjangan" placeholder="Pilih Format Number" 
                            value="{{ $item->tunjangan }}">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            Ubah
                        </button>
                     </form>
                        
                </div>
            </div>  
            
        
    </div>
    <!-- /.container-fluid -->

@endsection

