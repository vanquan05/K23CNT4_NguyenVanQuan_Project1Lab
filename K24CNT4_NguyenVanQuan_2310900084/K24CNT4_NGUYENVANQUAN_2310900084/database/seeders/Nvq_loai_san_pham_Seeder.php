<?php

namespace Database\Soeeders;

use Illuminate\Database\Console\Seeds\WithutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Nvq_loai_san_pham_Seeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('nvq_loai_san_pham')->insert([ 
            'nvqMaLoai'=>"L001",
            'nvqTenLoai'=>"Áo Ngủ Thu Đông",
            'nvqTrangThai'=>0
        ]);
        DB::table('nvq_loai_san_pham')->insert([ 
            'nvqMaLoai'=>"L002",
            'nvqTenLoai'=>"Đồ Trang Điểm Dành Cho Nam",
            'nvqTrangThai'=>1
        ]);
        DB::table('nvq_loai_san_pham')->insert([ 
            'nvqMaLoai'=>"L003",
            'nvqTenLoai'=>"Quần Âu",
            'nvqTrangThai'=>0
        ]);
        DB::table('nvq_loai_san_pham')->insert([ 
            'nvqMaLoai'=>"L004",
            'nvqTenLoai'=>"Áo Thời Trang Phong Cách",
            'nvqTrangThai'=>0
        ]);
    }
}