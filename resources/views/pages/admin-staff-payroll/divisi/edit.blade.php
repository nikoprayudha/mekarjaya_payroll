@extends('layouts.admin-staff-payroll')

 @section('content')
    
<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Divisi</h1>
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
                 
                    <form action="{{ route('divisi.update', $item->id_divisi )}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="nama_divisi">Nama Divisi</label>
                            <input type="text" class="form-control" name="nama_divisi" placeholder="Nama Divisi"
                             value="{{ $item->nama_divisi }}">
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

