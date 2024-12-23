@extends('nvqLayout.Admin.nvqMaster')
@section('title', 'Sửa loại sản phẩm')

@section('content-body')
    <div class="container">
        <h1>Sửa loại sản phẩm</h1>
        <form action="{{ route('nvqAdmin.nvqLoaiSanPham.Update', $item->nvqMaLoai) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nvqTenLoai">Tên Loại SP</label>
                <input type="text" name="nvqTenLoai" class="form-control" value="{{ $item->nvqTenLoai }}" required>
            </div>
            <div class="form-group">
                <label for="nvqTrangThai">Trạng thái</label>
                <select name="nvqTrangThai" class="form-control">
                    <option value="1" {{ $item->nvqTrangThai == 1 ? 'selected' : '' }}>Hoạt động</option>
                    <option value="0" {{ $item->nvqTrangThai == 0 ? 'selected' : '' }}>Không hoạt động</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
@endsection