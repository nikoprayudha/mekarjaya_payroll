<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KaryawanRequest;
use App\Models\Karyawan;
use App\Models\Divisi;
use App\Models\Jabatan;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // query join get data index
        $items = Karyawan::join('tbl_divisi', 'tbl_divisi.id_divisi', '=' , 'tbl_karyawan.id_divisi')
                           ->join('tbl_jabatan', 'tbl_jabatan.id_jabatan', '=' , 'tbl_karyawan.id_jabatan')
                           ->get(['tbl_karyawan.*' , 'nama_divisi', 'nama_jabatan'])
                           ->sortBy('id_karyawan');
     
         return view('pages.admin-staff-payroll.karyawan.index',[
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
        // untuk menampilkan combo box
        $divisi = Divisi::all();
        $jabatan = Jabatan::all();

         return view('pages.admin-staff-payroll.karyawan.create',[
            'divisi' => $divisi,
            'jabatan' => $jabatan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KaryawanRequest $request)
    {
        //
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store(
            'assets/foto', 'public'  
        );

        Karyawan::create($data);
        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_karyawan)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_karyawan)
    {
        //
        $item = Karyawan::findOrFail($id_karyawan);
        
        $divisi = Divisi::all();
        $jabatan = Jabatan::all();

         return view('pages.admin-staff-payroll.karyawan.edit',[
            'item' => $item,     
            'divisi' => $divisi,
            'jabatan' => $jabatan
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KaryawanRequest $request, $id_karyawan)
    {
        //
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store(
            'assets/foto', 'public'  
        );

        $item = Karyawan::findOrFail($id_karyawan);
        $item->update($data);

        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_karyawan)
    {
        //
        $item = Karyawan::findOrFail($id_karyawan);
        $item->delete();
 
         return redirect()->route('karyawan.index');
    }
}
