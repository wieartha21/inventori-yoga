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
                <h5 class="card-title text-black"> Daftar Kegiatan </h5>
                <h6 class="card-subtitle">Export data to Copy, CSV, Excel & Note.</h6>
            </div>

            <div class="card-body">
                <a href="{{ url('/backend/fkegiatan') }}"><button class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Tambah Kegiatan </button><br/><br/></a>
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Judul</th>
                                <th>Penyelenggara</th>
                                <th>Tgl Mulai</th>
                                <th>Tgl Akhir</th>
                                <th>Lokasi</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no =1;
                            @endphp
                            @foreach ($kegiatan as $item)
                                <tr>
                                    <td class="text-center">{{ $no }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->organizer }}</td>
                                    <td>{{ date('d F Y',strtotime($item->start_date)) }}</td>
                                    <td>{{  date('d F Y',strtotime($item->end_date)) }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td class="text-center"><a href="{{ url('/backend/ubahKegiatan') }}?id={{ encrypt($item->id) }}" class="text-warning"> <i class="fa fa-edit"></i> Ubah </a>
                                        &nbsp;
                                        <a href="{{ url('/backend/hapusKegiatan') }}?id={{ encrypt($item->id) }}" onclick="return confirm('Yakin akan hapus data : {{ $item->title }} ?')" class="text-danegr"><i class=" fa fa-trash"></i> Hapus </a>
                                        &nbsp;
                                        <a href="{{ url('/backend/detailKegiatan') }}?id={{ encrypt($item->id) }}" class="text-info"> <i class="fa fa-info"></i> Detail</a>
                                    </td>
                                </tr>
                                @php
                                    $no++;
                                @endphp
                            @endforeach
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
