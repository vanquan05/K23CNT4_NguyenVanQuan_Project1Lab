<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nvqSanPham extends Model
{
    use HasFactory;

    protected $table="nvq_san_pham";
    protected $fillable = [
        'nvqMaSanPham',
        'nvqTenSanPham',
        'nvqHinhAnh',
        'nvqSoLuong',
        'nvqDoiGia',
        'nvqMaLoai',
        'nvqTrangThai',
    ];
}