<!DOCTYPE html>
<html>
<head>
    <title>Print Data Absensi</title>
</head>
<body>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                           
        <thead>
            <tr>
                <th><h1>DATA ABENSI - PT MEKAR JAYA </h1></th>
                <th>Id Absensi</th>
                <th>Nama Karyawan</th>
                <th>Jml Kerja</th>
                <th>Jml Sakit</th>
                <th>Jml Izin</th>
                <th>Jml Alfa</th>
                <th>Jml Cuti</th>
                <th>Action</th>
            </tr>
            <tbody>
                @forelse ($data as $item)
                <tr>
                    <td>{{ $item->id_absensi}}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jml_kerja }}</td>
                    <td>{{ $item->jml_sakit }}</td>
                    <td>{{ $item->jml_izin }}</td>
                    <td>{{ $item->jml_alfa }}</td>
                    <td>{{ $item->jml_cuti }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="7">
                        Data Kosong
                    </td>
                </tr>
                @endforelse
        </thead>
    </table>
</body>
</html>