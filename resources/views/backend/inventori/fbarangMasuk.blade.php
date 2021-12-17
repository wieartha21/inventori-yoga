@extends('backend.main')
@section('head')

@endsection

@section('content')
<div class="row">

    <!-- Start XP Col -->
    <div class="col-lg-8">
        <div class="card m-b-30">
            <div class="card-header bg-white">
                <h5 class="card-title text-black"> Form Barang Masuk </h5>
                <h6 class="card-subtitle"> Isikan Form Berikut Untuk Menambahkan Data Barang Masuk dan Klik Simpan Setelah Filed Lengkap/Minimal Diisi </h6>
            </div>
            <div class="card-body">
                <form action="{{ url('/operator/simpanBarangMasuk') }}" enctype="multipart/form-data" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="">Merk * </label>
                        <select type="text" class="form-control" name="merk_id" required>
                            <option value="">== Pilih  Merk == </option>
                            @foreach ($merk as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Model * </label>
                        <input type="text" class="form-control" name="model" value="" placeholder="Model Perangkat" required>
                    </div>
                    <div class="form-group">
                        <label for="">Suplier * </label>
                        <select type="text" class="form-control" name="suplier_id" required>
                            <option value="">== Pilih Suplier == </option>
                            @foreach ($suplier as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah * </label>
                        <input type="number" class="form-control" name="jumlah" value="" placeholder="Jumlah Barang Yang Datang" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Masuk * </label>
                        <input type="date" class="form-control" name="date_in" value="" placeholder="Jumlah Barang Yang Datang" required>
                    </div>

                    <button type="submit" class="btn btn-primary btnxs" id="btnSimpan" title="Klik Untuk Simpan" onclick="this.attr('disabled', 'disabled');">
                        <i class="fa fa-save"></i> Simpan </button>
                </form>
            </div>

        </div>
    </div>
    <!-- End XP Col -->

</div>
@endsection

@section('script')

@endsection
