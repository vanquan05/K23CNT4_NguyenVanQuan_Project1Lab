..@extends('nvqLayout.Admin.nvqMaster')
@section('title','Danh sách loại sản phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
           <div class="col-12">
            <h1>Danh sách loại sản phẩm</h1> 
            <a href="{{route('nvqAdmin.nvqLoaiSanPham.Create')}}" class="btn btn-success">Thêm mới</a>
           </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã Loại SP</th>
                        <th>Tên loại SP</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nvqLoaiSanPham as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nvqMaLoai}}</td>
                            <td>{{$item->nvqTenLoai}}</td>
                            <td>{{ $item->nvqTrangThai == 1 ? 'Hoạt động' : 'Không hoạt động' }}</td>
                            <td>
                                <a href="{{ route('nvqAdmin.nvqLoaiSanPham.Show', ['id' => $item->nvqMaLoai]) }}" class="btn btn-primary">Xem</a>
                                <a href="{{ route('nvqAdmin.nvqLoaiSanPham.Edit', ['id' => $item->nvqMaLoai]) }}" class="btn btn-warning">Sửa</a>
                                <form action="{{ route('nvqAdmin.nvqLoaiSanPham.Destroy', $item->nvqMaLoai) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                </form>
                            </td>
                            
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5">Không có dữ liệu</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
