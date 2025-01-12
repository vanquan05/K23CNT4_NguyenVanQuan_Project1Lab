<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Nvq_san_pham_Seeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvq_san_pham')->insert([
            'nvqMaSanPham'=>"VP001",
            'nvqTenSanPham'=>"Áo phông nữ nam unisex local brand CLOUDZY FA1-0645-5 form oversize tay lỡ thun labubu",
            'nvqHinhAnh'=>"abc",
            'nvqSoLuong'=>100,
            'nvqDonGia'=>102000,
            'nvqMaLoai'=>1,
            'nvqTrangThai'=>0
        ]);
        DB::table('nvq_san_pham')->insert([
            'nvqMaSanPham'=>"VP002",
            'nvqTenSanPham'=>"Áo trễ vai nữ Choice HT68 cộc tay dáng dài, thanh lịch cho nữ",
            'nvqHinhAnh'=>"abc",
            'nvqSoLuong'=>200,
            'nvqDonGia'=>71000,
            'nvqMaLoai'=>1,
            'nvqTrangThai'=>0
        ]);
        DB::table('nvq_san_pham')->insert([
            'nvqMaSanPham'=>"VP003",
            'nvqTenSanPham'=>"Quần ống rộng dáng dài Choice FA1-0795-3 chất nhung tăm 3 màu tùy chọn phong cách",
            'nvqHinhAnh'=>"abc",
            'nvqSoLuong'=>150,
            'nvqDonGia'=>72000,
            'nvqMaLoai'=>1,
            'nvqTrangThai'=>0
        ]);
        DB::table('nvq_san_pham')->insert([
            'nvqMaSanPham'=>"VP004",
            'nvqTenSanPham'=>"Áo thun nữ Choice FA1-0507-3 baby tee phong cách basic",
            'nvqHinhAnh'=>"abc",
            'nvqSoLuong'=>300,
            'nvqDonGia'=>43000,
            'nvqMaLoai'=>1,
            'nvqTrangThai'=>0
        ]);
        DB::table('nvq_san_pham')->insert([
            'nvqMaSanPham'=>"PT01",
            'nvqTenSanPham'=>"Áo phông nam nữ local brand Choice FA1-0645-9 tay lỡ form rộng cổ tròn oversize WHITE BUNNY",
            'nvqHinhAnh'=>"abc",
            'nvqSoLuong'=>150,
            'nvqDonGia'=>91000,
            'nvqMaLoai'=>3,
            'nvqTrangThai'=>0
        ]);
        DB::table('nvq_san_pham')->insert([
            'nvqMaSanPham'=>"PT02",
            'nvqTenSanPham'=>"Bông tẩy trang Natural Choice XB02 cottonpad",
            'nvqHinhAnh'=>"abc",
            'nvqSoLuong'=>100,
            'nvqDonGia'=>15000,
            'nvqMaLoai'=>3,
            'nvqTrangThai'=>0
        ]);
        DB::table('nvq_san_pham')->insert([
            'nvqMaSanPham'=>"PT03",
            'nvqTenSanPham'=>"Vớ gấu Choice BT82 họa tiết dễ thương",
            'nvqHinhAnh'=>"abc",
            'nvqSoLuong'=>200,
            'nvqDonGia'=>35000,
            'nvqMaLoai'=>3,
            'nvqTrangThai'=>0
        ]);
        DB::table('nvq_san_pham')->insert([
            'nvqMaSanPham'=>"PT04",
            'nvqTenSanPham'=>" Set 10 khẩu trang 5D Kenko ES-81.14 chống nắng chống bụi 3 lớp cao cấp",
            'nvqHinhAnh'=>"abc",
            'nvqSoLuong'=>300,
            'nvqDonGia'=>19900,
            'nvqMaLoai'=>2,
            'nvqTrangThai'=>0
        ]);
        //
    }
}