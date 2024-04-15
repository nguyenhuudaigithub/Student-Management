<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\UserBlog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
            'title' => 'required|string',
            'description' => 'nullable|string',
            'detail' => 'nullable|string',
            'tags' => 'nullable|string',
            'isActive' => 'required|boolean',
            'photo_url' => ['nullable', 'image', 'max:1024'],
        ]);

        try {
            if ($request->hasFile('photo_url')) {
                $photoPath = $request->file('photo_url')->store('public/photos');
                $path = asset('storage/photos/' . basename($photoPath));
                $validatedData['photo_url'] = $path;
            }
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['photo_url' => $e->getMessage()]);
        }

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
            'title' => 'required|string',
            'description' => 'nullable|string',
            'detail' => 'nullable|string',
            'tags' => 'nullable|string',
            'isActive' => 'required|boolean',
            'photo_url' => ['nullable', 'image', 'max:1024'],
        ]);

        try {
            $blog = Blog::findOrFail($id);

            if ($request->hasFile('photo_url')) {
                if ($blog->photo_url) {
                    Storage::delete('public/photos/' . basename($blog->photo_url));
                }
                $photoPath = $request->file('photo_url')->store('public/photos');
                $path = asset('storage/photos/' . basename($photoPath));
                $validatedData['photo_url'] = $path;
            }

            $blog->update($validatedData);

        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['photo_url' => $e->getMessage()]);
        }

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
