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
                <h6 class="card-subtitle">Halaman Pengelolaan Data Nomor Seri Barang Masuk</h6>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-warning">
                            <table class="table-stripped table-sm">
                                <tbody>
                                    <tr><td>Merk</td> <td>: <b>{{ $barangMasuk->merk_name }}</b></td></tr>
                                    <tr><td>Suplier</td> <td>: <b>{{ $barangMasuk->suplier_name }}</b></td></tr>
                                    <tr><td>Tanggal</td> <td>: <b>{{ date('d F Y',strtotime($barangMasuk->date_in)) }}</b></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br/><br/>
                <a href="{{ url('/operator/fNoSeri?id='.encrypt($barangMasuk->id)) }}">
                    <button class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Tambah Nomor Seri </button><br/><br/>
                </a>
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nomor Seri</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no =1;
                            @endphp
                            @foreach ($seriBarang as $item)
                                {{-- @dump($item) --}}
                                <tr>
                                    <td class="text-center">{{ $no }}</td>
                                    <td>{{ $item->nomor }}</td>
                                    <td>@if ($item->keluar_id )
                                            <a href="{{ url('/operator/detailBarangKeluar?id='.encrypt($item->keluar_id)) }}">Sudah Dikirim</a>
                                        @else
                                            {{ "Belum Dikirim" }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        &nbsp;
                                        <a href="{{ url('/operator/hapusSeri') }}?id={{ encrypt($item->id) }}" onclick="return confirm('Yakin akan hapus data : {{ $item->name }} ?')" class="text-danger"><i class=" fa fa-trash"></i> Hapus </a>
                                        &nbsp;
                                        <a href="#" onclick="kirim('{{ $item->id }}')" class="text-info" data-toggle="modal" data-target="#modalkirim" > <i class="fa fa-info"></i> Kirim </a>
                                    </td>
                                </tr>
                                @php
                                    $no++;
                                @endphp
                            @endforeach
                            <script>
                                function kirim(id){
                                    document.getElementById("seriID").value = id;
                                }
                            </script>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End XP Col -->
    <!-- Modal -->
        <div class="modal fade" id="modalkirim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Kirim Barang </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form action="{{ url('/operator/simpanKirim') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Pengantar</label>
                            <input type="text" name="pengantar" class="form-control" id="">
                        </div>
                        <input type="hidden" id="seriID" name="seri_id"  class="form-control" >
                        <div class="form-group">
                            <label for="">Supir</label>
                            <select name="supir_id" id="" class="form-control">
                                @foreach ($supir as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Kirim</label>
                            <input type="date" name="date_out" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor SJ</label>
                            <input type="text" name="no_sj" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Polisi</label>
                            <input type="text" name="nopol" class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Dikirim Ke</label>
                            <input type="text" name="send_to" class="form-control" id="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            </div>
        </div>

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
