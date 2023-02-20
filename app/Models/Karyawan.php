<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table='Data';
    protected $fillable = [
        'Nama',
        'Umur',
        'Alamat',
        'Nomor_Telp'
    ];

}