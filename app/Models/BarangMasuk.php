<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    //
    protected $table =  'barang_masuk';
    protected $guarded = ['id'];


    public function withSuplier(){
        return $this->belongsTo(Suplier::class, 'suplier_id', 'id');
    }
}
