@extends('admin.layouts.layout')

@section('contentAdmin')
<div class="container">
    <h1>Danh sách Khoa</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Tên Khoa</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departmentList as $department)
            <tr>
                <td>{{ $department->id }}</td>
                <td>{{ $department->name }}</td>
                <td>
                <button onclick="location.href='{{ url('admin/department/edit/' . $department->id) }}'" class="btn btn-sm btn-primary" title="Edit">
                <p class="feather-edit">Chỉnh sửa</p>
                </button>
                <form id="deleteForm" action="{{ route('admin/department.delete') }}" method="POST" style="display: inline;">
                @csrf
                <input type="hidden" name="id" value="{{ $department->id }}">
                <button type="submit" class="btn btn-sm btn-danger" title="Delete" onclick="return confirm('Bạn có chắc chắn muốn xóa phòng ban này không?')"><p class="feather-trash-2">Xoá</p></button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
