<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DivisiRequest;
use App\Models\Divisi;
use Illuminate\Http\Request;


class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Divisi::all();
        
        return view('pages.admin-staff-payroll.divisi.index',[
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
        return view('pages.admin-staff-payroll.divisi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DivisiRequest $request)
    {
        //
        $data = $request->all();
        
        Divisi::create($data);
        return redirect()->route('divisi.index')
        ->with('success','Data successfully added.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_divisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_divisi)
    {
        // ambil data id
        
        $item = Divisi::findOrFail($id_divisi);
       
        return view('pages.admin-staff-payroll.divisi.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DivisiRequest $request, $id_divisi)
    {
        // merubah core data
        $data = $request->all();
        
        $item = Divisi::findOrFail($id_divisi);
        $item->update($data);    

        return redirect()->route('divisi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_divisi)
    {
        //
        $item = Divisi::findOrFail($id_divisi);
        $item->delete();

        return redirect()->route('divisi.index');
    }
}
