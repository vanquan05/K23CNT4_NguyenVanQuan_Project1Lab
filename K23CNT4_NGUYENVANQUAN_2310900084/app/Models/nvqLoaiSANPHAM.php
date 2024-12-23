<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nvqLoaiSANPHAM extends Model
{
    use HasFactory;

    protected $table="nvq_loai_san_pham";
    protected $fillable = [
        'nvqMaLoai',
        'nvqTenLoai',
        'nvqTrangThai',
    ];
}