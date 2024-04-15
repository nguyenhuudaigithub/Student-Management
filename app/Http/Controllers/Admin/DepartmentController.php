<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

Class DepartmentController extends Controller
{
    public function Department()
    {
        $departmentList = Department::all();
        return view('admin.department.department', compact('departmentList'));
    }

    /**
     * Hiển thị form để thêm mới lớp học.
     *
     * @return \Illuminate\Http\Response
     */
    public function DepartmentAdd()
    {
        return view('admin.department.add-department');
    }

    /**
     * Lưu lớp học mới vào cơ sở dữ liệu.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function DepartmentSave(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',

        ]);

        try {
            $Department = new Department;
            $Department->name = $request->name;
            $Department->save();
            return redirect()->route('admin/Department/list');
        } catch (\Exception $e) {

            return redirect()->route('admin/department/list');
        }
    }

    /**
     * Hiển thị thông tin của lớp học để chỉnh sửa.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DepartmentEdit($id)
    {
        $DepartmentEdit = Department::find($id);
        return view('admin.department.edit-department', compact('DepartmentEdit'));
    }

    /**
     * Cập nhật thông tin của lớp học trong cơ sở dữ liệu.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DepartmentUpdate(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        try {
            $Department = Department::find($id);
            $Department->name = $request->name;
            $Department->save();

            return redirect()->route('admin/department/list');
        } catch (\Exception $e) {

            return redirect()->route('admin/department/list');
        }
    }

    /**
     * Xóa lớp học khỏi cơ sở dữ liệu.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;

        $department = Department::findOrFail($id);
        if (!$department) {

            return redirect()->route('admin/department/list');
        }

        try {
            $department->delete();
            return redirect()->route('admin/department/list');
        } catch (\Exception $e) {
            return redirect()->route('admin/department/list');
        }
    }
}
