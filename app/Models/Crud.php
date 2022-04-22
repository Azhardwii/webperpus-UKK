<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = 'cruds';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'Nama_Barang', 'Jumlah', 'Kondisi_dan_Keterangan'];
}
