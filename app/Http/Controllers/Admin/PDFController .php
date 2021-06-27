<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AbsensiRequest;
use App\Models\Absensi;
use Illuminate\Http\Request;
use PDF;

class PDFController  extends Controller
{   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        //
        $data  = Absensi::join('tbl_karyawan', 'tbl_karyawan.id_karyawan', '=' , 'tbl_absensi.id_absensi')
                           ->get(['tbl_absensi.*' , 'nama'])
                           ->sortBy('id_absensi');
        
        $pdf = PDF::loadView('pages.admin-staff-payroll.absensi.print', $data);
        return $pdf->download('data_absensi.pdf');

    }

}
