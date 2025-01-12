<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\nvq_thanh_toan;
class nvq_Thanh_Toan_Controller extends Controller
{
    public function nvqList()
    {
        $nvmthanhtoans=nvq_thanh_toan::all();
        return view('nvqAdmins.nvqThanhToan.nvq_list',['nvqthanhtoans'=>$nvqthanhtoans]);
    }
    public function nvqCreate()
    {
        return view('nvqAdmins.nvqThanhToan.nvq_create');
    }
    public function nvqCreateSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $nvqThanhToan = new nvq_thanh_toan;
        $nvqThanhToan->nvqMaGiaoDich = $request->nvqMaGiaoDich;
        $nvqThanhToan->nvqMaKhachHang = $request->nvqMaKhachHang ;
        $nvqThanhToan->nvqMaHoaDon = $request->nvqMaHoaDon;
        $nvqThanhToan->nvqTongTien = $request->nvqTongTien;
        $nvqThanhToan->nvqPTTT = $request->nvqPTTT;
        $nvqThanhToan->nvqNgayThanhToan = $request->nvqNgayThanhToan;
        $nvqThanhToan->nvqTrangThai = $request->nvqTrangThai;
        $nvqThanhToan->save();
        return redirect()->route('nvqadmins.nvqthanhtoan');
    }
    public function nvqEdit($id)
    {
        $nvqThanhToan=nvq_thanh_toan::find($id);
        return view('nvqadmins.nvqqhanhToan.nvq_edit',['nvqThanhToan'=>$nvqThanhToan]);
    }
    public function nvqEditSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $nvqThanhToan=nvq_thanh_toan::find($request-> id);
        $nvqThanhToan->nvqMaGiaoDich = $request->nvqMaGiaoDich;
        $nvqThanhToan->nvqMaKhachHang = $request->nvqMaKhachHang ;
        $nvqThanhToan->nvqMaHoaDon = $request->nvqMaHoaDon;
        $nvqThanhToan->nvqTongTien = $request->nvqTongTien;
        $nvqThanhToan->nvqPTTT = $request->nvqPTTT;
        $nvqThanhToan->nvqNgayThanhToan = $request->nvqNgayThanhToan;
        $nvqThanhToan->nvqTrangThai = $request->nvqTrangThai;
        $nvqThanhToan->save();
        return redirect()->route('nvqadmins.nvqthanhtoan');
    }
    public function nvqDelete($id)
    {
        $nvqThanhToan=nvq_thanh_toan::find($id);
        $nvqThanhToan->delete();
        return redirect()->route('nvqadmins.nvqthanhtoan');
    }
}