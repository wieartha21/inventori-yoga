@extends('backend.main')
@section('head')

@endsection

@section('content')
<div class="row">

    <!-- Start XP Col -->
    <div class="col-lg-8">
        <div class="card m-b-30">
            <div class="card-header bg-white">
                <h5 class="card-title text-black"> Form Merk </h5>
                <h6 class="card-subtitle"> Isikan Form Berikut Untuk Menambahkan Data Merk dan Klik Simpan Setelah Filed Lengkap/Minimal Diisi </h6>
            </div>
            <div class="card-body">
                <form action="{{ url('/operator/simpanMerk') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama * </label>
                        <input type="text" class="form-control" name="name" value="" placeholder="Nama Merk" required>
                    </div>
                    <div class="form-group">
                        <label for="">Type * </label>
                        <select type="text" class="form-control" name="type" required>
                            <option value="">== Pilih Type Merk == </option>
                            <option value="Laptop">Laptop</option>
                            <option value="Smartphone">Smartphone</option>
                            <option value="CCTV">CCTV</option>
                            <option value="Tablet PC">Tablet PC</option>
                            <option value="PC">PC</option>
                            <option value="AIO PC">AIO PC</option>
                            <option value="Tablet PC">Tablet PC</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
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
