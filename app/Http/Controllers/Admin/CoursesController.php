<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CoursUser;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    //
    public function index()
    {
        $courses = Courses::all();
        return view('admin.courses.index', compact('courses'));
    }
    public function indexUser()
    {
        $courses = Courses::all();
        return view('user.courses.view', compact('courses'));
    }

    // Tạo bài viết
    public function create()
    {
        $departments = Department::all();
        return view('admin.courses.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'details'=> 'nullable|string',
            'price' => 'required|numeric',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'classroom' => 'required|string',
            'department_id' => 'required|string',
        ]);

        $courses = courses::create($validatedData);

        $userId = Auth::id();

            // $usercourses = CoursUser::create([
            //     'user_id' => $userId,
            //     'courses_id' => $courses->id,
            // ]);

        return redirect()->route('admin.courses.index')->with('success', 'courses created successfully.');
    }

    // Chỉnh sửa bài viết
    public function edit($id)
    {
        $courses = courses::findOrFail($id);
        return view('admin.courses.edit', compact('courses'));
    }

    // Lưu thay đổi sau chỉnh sửa bài viết
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'details'=> 'nullable|string',
            'price' => 'required|numeric',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'classroom' => 'required|string',
            'department_id' => 'required|string',
        ]);

        $courses = courses::findOrFail($id);
        $courses->update($validatedData);

        return redirect()->route('admin.courses.index')->with('success', 'courses updated successfully.');
    }

    // Xóa bài viết
    public function destroy($id)
    {
        $courses = courses::findOrFail($id);
        $courses->delete();

        return redirect()->route('admin.courses.index')->with('success', 'courses deleted successfully.');
    }
}
