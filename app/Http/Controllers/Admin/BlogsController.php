<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\UserBlog;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    // Danh sách blogs
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    // Tạo bài viết
    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'detail' => 'nullable|string',
            'tags' => 'nullable|string|max:40',
            'isActive' => 'required|boolean',
        ]);

        $blog = Blog::create($validatedData);

        $userId = Auth::id();

        $userBlog = UserBlog::create([
            'user_id' => $userId,
            'blog_id' => $blog->id,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }

    // Chỉnh sửa bài viết
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    // Lưu thay đổi sau chỉnh sửa bài viết
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'detail' => 'nullable|string',
            'tags' => 'nullable|string|max:40',
            'isActive' => 'required|boolean',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update($validatedData);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    // Xóa bài viết
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
