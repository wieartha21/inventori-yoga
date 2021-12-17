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
                <h5 class="card-title text-black"> {{ @$titlePage }}</h5>
                <h6 class="card-subtitle">Halaman Pengelolaan Data Barang Masuk</h6>
            </div>

            <div class="card-body">
                <a href="{{ url('/operator/fbarangMasuk') }}"><button class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Tambah Barang Masuk </button><br/><br/></a>
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Merk</th>
                                <th>Model</th>
                                <th>Nomor Seri</th>
                                <th>Suplier</th>
                                <th>TGL Masuk</th>
                                <th>TGL Keluar</th>
                                <th>Pengantar</th>
                                <th>Nama Supir</th>
                                <th>Diantar Ke</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no =1;
                            @endphp
                            @foreach ($barangKeluar as $item)
                                {{-- @dump($item) --}}
                                <tr>
                                    <td class="text-center">{{ $no }}</td>
                                    <td>{{ $item->merk_name }}</td>
                                    <td>{{ $item->model }}</td>
                                    <td>{{ $item->nomor_seri }}</td>
                                    <td>{{ strtoupper($item->suplier_name) }}</td>
                                    <td>{{ date('d F Y',strtotime($item->date_in)) }}</td>
                                    <td>{{ date('d F Y',strtotime($item->date_out)) }}</td>
                                    <td>{{ $item->pengantar }}</td>
                                    <td>{{ $item->nama_supir }}</td>
                                    <td>{{ $item->send_to }}</td>
                                    <td class="text-center">
                                        {{-- <a href="{{ url('/operator/ubahSuplier') }}?id={{ encrypt($item->id) }}" class="text-warning"> <i class="fa fa-edit"></i> Ubah </a> --}}
                                        &nbsp;
                                        <a href="{{ url('/operator/hapusBarangMasuk') }}?id={{ encrypt($item->id) }}" onclick="return confirm('Yakin akan hapus data : {{ $item->name }} ?')" class="text-danger"><i class=" fa fa-trash"></i> Hapus </a>
                                        &nbsp;
                                        <a href="{{ url('/operator/seriBarang') }}?id={{ encrypt($item->id) }}" class="text-info"> <i class="fa fa-info"></i> Detail </a>
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
