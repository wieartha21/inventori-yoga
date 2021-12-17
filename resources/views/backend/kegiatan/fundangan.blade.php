@extends('backend.main')
@section('head')

@endsection

@section('content')
<div class="row">

    <!-- Start XP Col -->
    <div class="col-lg-8">
        <div class="card m-b-30">

            <div class="card-header bg-white">
                <h5 class="card-title text-black"> Form Undangan </h5>
                <h6 class="card-subtitle"> Isikan Form Berikut Untuk Menambahkan Data Kegiatan dan Klik Simpan Setelah Filed Lengkap/Minimal Diisi </h6>
            </div>
            <div class="card-body">
                <form action="{{ url('/backend/simpanUndangan') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama * </label>
                        <input type="text" class="form-control" name="name" value="" placeholder="Nama Undangan" required>
                    </div>
                    <input type="hidden" name="kegiatan_id" value="{{ encrypt($kegiatan->id) }}">

                    <div class="form-group">
                        <label for="">Jabatan * </label>
                        <input type="text" class="form-control" name="position" value="" placeholder="Jabatan undangan" required>
                    </div>

                    <div class="form-group">
                        <label for="">Instansi * </label>
                        <input type="text" class="form-control" name="agency_office" value="" placeholder="Nama instansi/organisasi yang diwakili" required>
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
