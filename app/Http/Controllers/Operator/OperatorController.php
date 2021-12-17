<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\Merk;
use App\Models\NomorSeriBarang;
use App\Models\Supir;
use App\Models\Suplier;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    //
    public function index(Request $request){
        $data = [
            'titlePage' => "Operator Inventori"
        ];
        return view('backend.inventori.index',$data);
    }

    public function suplier(Request $request){
        $data = [
            'titlePage' => "Data Suplier",
            'suplier' => Suplier::all()
        ];
        return view('backend.inventori.suplier',$data);
    }

    public function fsuplier(Request $request){
        $data = [
            'titlePage' => "Form Tambah Data Suplier",
            'suplier' => Suplier::all()
        ];
        return view('backend.inventori.fsuplier',$data);
    }

    public function simpanSuplier(Request $request){
        $newData = $request->except(['_token']);
        Suplier::create($newData);
        return redirect(url('/operator/suplier'))->with("status", "Berhasil Simpan Data Suplier");
    }

    public function hapusSuplier(Request $request){
        $id = decrypt($request->id);
        Suplier::where('id',$id)->delete();
        return redirect(url('/operator/suplier'))->with("status", "Berhasil Hapus Data Suplier");
    }

    public function supir(Request $request){
        $data = [
            'titlePage' => "Data Supir",
            'supir' => Supir::all()
        ];
        return view('backend.inventori.supir',$data);
    }

    public function fsupir(Request $request){
        $data = [
            'titlePage' => "Form Tambah Data Supir"
        ];
        return view('backend.inventori.fsupir',$data);
    }

    public function simpanSupir(Request $request){
        $newData = $request->except(['_token']);
        Supir::create($newData);
        return redirect(url('/operator/supir'))->with("status", "Berhasil Hapus Data Supir");
    }

    public function hapusSupir(Request $request){
        $id = decrypt($request->id);
        Supir::where('id',$id)->delete();
        return redirect(url('/operator/supir'))->with("status", "Berhasil Hapus Data Supir");
    }

    public function merk(Request $request){
        $data = [
            'titlePage' => "Data Merk",
            'merk' => Merk::all()
        ];
        return view('backend.inventori.merk',$data);
    }

    public function fmerk(Request $request){
        $data = [
            'titlePage' => "Form Tambah Data Merk"
        ];
        return view('backend.inventori.fmerk',$data);
    }

    public function simpanMerk(Request $request){
        $newData = $request->except(['_token']);
        Merk::create($newData);
        return redirect(url('/operator/merk'))->with("status", "Berhasil Simpan Data Merk");
    }

    public function hapusMerk(Request $request){
        $id = decrypt($request->id);
        Merk::where('id',$id)->delete();
        return redirect(url('/operator/merk'))->with("status", "Berhasil Hapus Data Merk");
    }

    public function barangMasuk(Request $request){
       // dd(BarangMasukwithsuplier());
        $data = [
            'titlePage' => "Data Barang Masuk",
            'brgMasuk' => BarangMasuk::select('*','suplier.id as suplier_id','master_merk.id as merk_id','suplier.name as suplier_name','master_merk.name as merk_name', 'barang_masuk.id as id')
                ->join('suplier','suplier.id','=','barang_masuk.suplier_id')
                ->join('master_merk','master_merk.id','=','barang_masuk.merk_id')->get()
        ];
        // dd($data);
        return view('backend.inventori.barangMasuk',$data);
    }

    public function fbarangMasuk(Request $request){
        $data = [
            'titlePage' => "Form Data Barang Masuk",
            'merk' => Merk::all(),
            'suplier' => Suplier::all()
        ];
        return view('backend.inventori.fbarangMasuk',$data);
    }

    public function simpanBarangMasuk(Request $request){
        $newData = $request->except(['_token']);
        BarangMasuk::create($newData);
        return redirect(url('/operator/barangMasuk'))->with("status", "Berhasil Simpan Data Barang Masuk");
    }

    public function seriBarang(Request $request){
        $idBarangMasuk = decrypt($request->id);
        $barangMasuk =  BarangMasuk::select('*','suplier.id as suplier_id','master_merk.id as merk_id','suplier.name as suplier_name','master_merk.name as merk_name', 'barang_masuk.id as id')
        ->join('suplier','suplier.id','=','barang_masuk.suplier_id')
        ->join('master_merk','master_merk.id','=','barang_masuk.merk_id')->where('barang_masuk.id',$idBarangMasuk)->first();

        $seriBarang = NomorSeriBarang::select('*','suplier.id as suplier_id','master_merk.id as merk_id','suplier.name as suplier_name',
            'master_merk.name as merk_name', 'barang_masuk.id as barang_masuk_id','seri_barang_masuk.id as id','seri_barang_keluar.id as keluar_id')
            ->where('barang_masuk_id',$idBarangMasuk)
            ->join('barang_masuk','barang_masuk.id','=','seri_barang_masuk.barang_masuk_id')
            ->join('suplier','suplier.id','=','barang_masuk.suplier_id')
            ->join('master_merk','master_merk.id','=','barang_masuk.merk_id')
            ->leftJoin('seri_barang_keluar','seri_barang_keluar.seri_id','=','seri_barang_masuk.id')
            ->get();
        $data = [
            'seri' => $seriBarang,
            'titlePage' => "Daftar Seri Barang Masuk",
            'seriBarang' => $seriBarang,
            'barangMasuk' => $barangMasuk,
            'supir' => Supir::all()
        ];
        // dd($seriBarang);
        return view('backend.inventori.seriBarangMasuk',$data);
    }

    public function hapusBarangMasuk(Request $request){
        $id = decrypt($request->id);
        BarangMasuk::where('id',$id)->delete();
        NomorSeriBarang::where('barang_masuk_id',$id)->delete();
        return redirect(url('/operator/barangMasuk'))->with("status", "Berhasil Simpan Data Barang Masuk");
    }

    public function fNoSeri(Request $request){
        $idBarangMasuk = decrypt($request->id);
        $barangMasuk =  BarangMasuk::select('*','suplier.id as suplier_id','master_merk.id as merk_id','suplier.name as suplier_name','master_merk.name as merk_name', 'barang_masuk.id as id')
        ->join('suplier','suplier.id','=','barang_masuk.suplier_id')
        ->join('master_merk','master_merk.id','=','barang_masuk.merk_id')->where('barang_masuk.id',$idBarangMasuk)
        ->first();

        $data = [
            'titlePage' => "Form Data Nomor Seri Barang Masuk",
            'barangMasuk' => $barangMasuk
        ];

        return view('backend.inventori.fseriBarangMasuk',$data);
    }

    public function simpanNomorSeri(Request $request){
        $newData = $request->except(['_token']);
        NomorSeriBarang::create($newData);
        return redirect(url('/operator/seriBarang?id='.encrypt($request->barang_masuk_id)))->with("status", "Berhasil Simpan Data Barang Masuk");
    }

    public function hapusSeriBarang(Request $request){

        $seribarang = NomorSeriBarang::where('id',decrypt($request->id));
        $idBarangMasuk = $seribarang->first()->barang_masuk_id;
        $seribarang->delete();
        return redirect(url('/operator/seriBarang?id='.encrypt($idBarangMasuk)))->with("status", "Berhasil Simpan Data Barang Masuk");

    }

    public function simpanKirim(Request $request){
        $newData = $request->except(['_token']);
        BarangKeluar::create($newData);
        $barangMasuk = NomorSeriBarang::where('id',$request->seri_id)->first()->barang_masuk_id;
        return redirect(url('/operator/seriBarang?id='.encrypt($barangMasuk)))->with("status", "Berhasil Simpan Data Barang Keluar");
    }

    public function detailBarangKeluar(Request $request){
        $id = decrypt($request->id);
        $detailKirim = BarangKeluar::select("*",'suplier.name as suplier_name','master_merk.name as merk_name','seri_barang_masuk.nomor as nomor_seri','supir.name as nama_supir')->where('seri_barang_keluar.id',$id)
        ->join('supir','supir.id','=','seri_barang_keluar.supir_id')
        ->join('seri_barang_masuk','seri_barang_masuk.id','=','seri_barang_keluar.seri_id')
        ->join('barang_masuk','barang_masuk.id','=','seri_barang_masuk.barang_masuk_id')
        ->join('master_merk', 'master_merk.id','=','barang_masuk.merk_id')
        ->join('suplier','suplier.id','=','barang_masuk.suplier_id')
        ->first();
        $data = [
            'titlePage' => "Detail Pengiriman Barang ",
            'kirim' => $detailKirim
        ];

        // dump($detailKirim);

        return view('backend.inventori.detailKeluar',$data);
    }

    public function barangKeluar(Request $request){
        $barangKeluar = BarangKeluar::select("*",'suplier.name as suplier_name','master_merk.name as merk_name','seri_barang_masuk.nomor as nomor_seri','supir.name as nama_supir','seri_barang_masuk.nomor as nomor_seri')
        ->join('supir','supir.id','=','seri_barang_keluar.supir_id')
        ->join('seri_barang_masuk','seri_barang_masuk.id','=','seri_barang_keluar.seri_id')
        ->join('barang_masuk','barang_masuk.id','=','seri_barang_masuk.barang_masuk_id')
        ->join('master_merk', 'master_merk.id','=','barang_masuk.merk_id')
        ->join('suplier','suplier.id','=','barang_masuk.suplier_id')
        ->get();
        $data = [
            'barangKeluar' => $barangKeluar,
            'titlePage' => "Rangkuman Barang Keluar",
        ];



        return view('backend.inventori.rangkumanKeluar',$data);

        // dump($data);
    }

}
