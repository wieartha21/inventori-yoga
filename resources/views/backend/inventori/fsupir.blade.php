@extends('backend.main')
@section('head')

@endsection

@section('content')
<div class="row">

    <!-- Start XP Col -->
    <div class="col-lg-8">
        <div class="card m-b-30">
            <div class="card-header bg-white">
                <h5 class="card-title text-black"> Form Supir </h5>
                <h6 class="card-subtitle"> Isikan Form Berikut Untuk Menambahkan Data Supir dan Klik Simpan Setelah Filed Lengkap/Minimal Diisi </h6>
            </div>
            <div class="card-body">
                <form action="{{ url('/operator/simpanSupir') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama * </label>
                        <input type="text" class="form-control" name="name" value="" placeholder="Nama Supir" required>
                    </div>
                    {{-- <input type="hidden" name="kegiatan_id" value="{{ encrypt($kegiatan->id) }}"> --}}
                    <div class="form-group">
                        <label for="">Phone * </label>
                        <input type="text" class="form-control" name="phone" value="" placeholder="Nomor HP/Telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email * </label>
                        <input type="email" class="form-control" name="email" value="" placeholder="example@gmail.com" required>
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
