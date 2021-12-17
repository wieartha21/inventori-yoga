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
