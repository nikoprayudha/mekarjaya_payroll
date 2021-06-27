<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AbsensiRequest;
use App\Models\Absensi;
use App\Models\Karyawan;
use Illuminate\Http\Request;


class AbsensiController extends Controller
{   

   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Absensi::join('tbl_karyawan', 'tbl_karyawan.id_karyawan', '=' , 'tbl_absensi.id_absensi')
                           ->get(['tbl_absensi.*' , 'nama'])
                           ->sortBy('id_absensi');
        
        return view('pages.admin-staff-payroll.absensi.index',[
            'items' => $items
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       // untuk menampilkan combo box
       $karyawan = Karyawan::all();

        return view('pages.admin-staff-payroll.absensi.create',[
           'karyawan' => $karyawan
       ]);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AbsensiRequest $request)
    {
        //
        $data = $request->all();
        
        Absensi::create($data);
        return redirect()->route('absensi.index')
        ->with('success','Data successfully added.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_absensi)
    {
        // ambil data id
        
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AbsensiRequest $request, $id_absensi)
    {
        // merubah core data
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_absensi)
    {
        //
        $item = Absensi::findOrFail($id_absensi);
        $item->delete();

        return redirect()->route('absensi.index');
    }
}
