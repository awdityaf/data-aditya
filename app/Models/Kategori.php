<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table='kategori';
    protected $primarykey = 'id';
    protected $fillable =['kategori','waktu','harga'];

    public function kategori()
    {
        return $this->hasMany(User::class, 'id_kategori','id');
    }
    public function users()
{
    return $this->hasMany(User::class, 'id_kategori');
}

}
