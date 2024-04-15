@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Danh sách khoá học</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên khoá học</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>Lớp học</th>
                <th>Khoa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->details }}</td>
                <td>{{ $course->price }}</td>
                <td>{{ $course->start_time }}</td>
                <td>{{ $course->end_time }}</td>
                <td>{{ $course->classroom }}</td>
                <td>{{ $course->department->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
