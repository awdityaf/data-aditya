<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $primarykey = 'id_pembayaran';
    protected $fillable = ['nomor_pembayaran','nomor_rekening','nama_bank','nama_penerima','nomor_hp_penerima','jumlah_pembayaran'];
    public function pembayaran()
    {
        return $this->hasMany(User::class, 'id_pembayaran', 'id_pembayaran');
    }
}
