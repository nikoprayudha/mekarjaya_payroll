<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JabatanRequest;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //
         $items = Jabatan::all();
        
         return view('pages.admin-staff-payroll.jabatan.index',[
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
        return view('pages.admin-staff-payroll.jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JabatanRequest $request)
    {
        //
        $data = $request->all();
        
        Jabatan::create($data);
        return redirect()->route('jabatan.index')
        ->with('success','Data successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_jabatan)
    {
        //
        $item = Jabatan::findOrFail($id_jabatan);
       
        return view('pages.admin-staff-payroll.jabatan.edit',[
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
    public function update(JabatanRequest $request, $id_jabatan)
    {
        //
        // merubah core data
        $data = $request->all();
        
        $item = Jabatan::findOrFail($id_jabatan);
        $item->update($data);    

        return redirect()->route('jabatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jabatan)
    {
        //
         //
         $item = Jabatan::findOrFail($id_jabatan);
         $item->delete();
 
         return redirect()->route('jabatan.index');
    }
}
