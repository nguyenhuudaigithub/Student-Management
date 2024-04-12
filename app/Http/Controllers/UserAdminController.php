<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserAdminController extends Controller
{
    // Lấy danh sách người dùng
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }

    // Hiển thị form chỉnh sửa người dùng
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', ['user' => $user]);
    }

    // Cập nhật thông tin người dùng
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('admin.users.index')->with('success', 'Cập nhật người dùng thành công');
    }

    // Xóa người dùng
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Xóa người dùng thành công');
    }
}
