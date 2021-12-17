@extends('backend.main')
@section('head')
    <!-- DataTables CSS -->
    <link href="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive Datatable CSS -->
    <link href="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="row">

    <!-- Start XP Col -->
    <div class="col-lg-12">
        <div class="card m-b-30">

            <div class="card-header bg-white">
                <h5 class="card-title text-black"> {{ @$titlePage }} </h5>
                <h6 class="card-subtitle">Selamat datang operator data inventori</h6>
            </div>

            <div class="card-body">
                <div class="alert alert-warning">
                    <table class="table-stripped table-sm">
                        <tbody>
                            <tr><td>Merk</td> <td>: <b>{{ $kirim->merk_name }}</b></td></tr>
                            <tr><td>Suplier</td> <td>: <b>{{ $kirim->suplier_name }}</b></td></tr>
                            <tr><td>Pengantar</td> <td>: <b>{{ $kirim->pengantar }}</b></td></tr>
                            <tr><td>Nomor Seri</td> <td>: <b>{{ $kirim->nomor_seri }}</b></td></tr>
                            <tr><td>Tanggal</td> <td>: <b>{{ date('d F Y',strtotime($kirim->date_out)) }}</b></td></tr>
                            <tr><td>Supir</td> <td>: <b>{{ $kirim->nama_supir }}</b></td></tr>
                            <tr><td>Nomor SJ</td> <td>: <b>{{ $kirim->no_sj }}</b></td></tr>
                            <tr><td>Dikirim Ke</td> <td>: <b>{{ $kirim->send_to }}</b></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End XP Col -->

</div>
@endsection

@section('script')
 <!-- Required Datatable JS -->
 <script src="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

 <!-- Buttons Examples -->
 <script src="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/dataTables.buttons.min.js"></script>
 <script src="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
 <script src="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/jszip.min.js"></script>
 <script src="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/pdfmake.min.js"></script>
 <script src="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/vfs_fonts.js"></script>
 <script src="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/buttons.html5.min.js"></script>
 <script src="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/buttons.print.min.js"></script>
 <script src="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/buttons.colVis.min.js"></script>

 <!-- Responsive Examples -->
 <script src="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/dataTables.responsive.min.js"></script>
 <script src="{{ url('/') }}/neon/html/horizontal/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
<!-- Datatable init JS -->
<script src="{{ url('/') }}/neon/html/horizontal/assets/js/init/table-datatable-init.js"></script>

@endsection
